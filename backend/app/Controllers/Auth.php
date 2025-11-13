<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

/**
 * Auth Controller - Handles User Authentication
 *
 * This controller manages all authentication-related functionality:
 * - User login and logout
 * - User registration (signup)
 * - Session management
 * - Password security
 * - Role-based redirects
 *
 * Key Concepts:
 * - Sessions: Temporary storage of user data on the server
 * - Flashdata: One-time messages that disappear after being displayed
 * - CSRF Protection: Prevents cross-site request forgery attacks
 * - Password Hashing: Securely stores passwords using bcrypt
 * - Input Validation: Ensures data meets requirements before processing
 */
class Auth extends BaseController
{
    /**
     * Display the login page
     *
     * GET /login
     * Shows the login form to users who aren't already logged in
     */
    public function showLoginPage()
    {
        // Get the session service - this manages user login state
        $session = session();

        // If user is already logged in, redirect them to home page
        // This prevents showing the login form to authenticated users
        if ($session->has('user')) {
            return redirect()->to('/');
        }

        // Get any error messages or previously entered data from flashdata
        // Flashdata is temporary data that survives one page redirect
        $errors = $session->getFlashdata('errors') ?? [];
        $old = $session->getFlashdata('old') ?? [];

        // Render the login view with error and old data
        return view('user/auth/login', ['errors' => $errors, 'old' => $old]);
    }

    /**
     * Process login form submission
     *
     * POST /login
     * Validates credentials and creates user session on success
     */
    public function login()
    {
        // Get the HTTP request service to access form data
        $request = service('request');

        // Get the session service for managing user state
        $session = session();

        // Set up form validation rules using CodeIgniter's Validation service
        // This ensures the submitted data meets our requirements
        $validation = \Config\Services::validation();
        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required');

        // Get all POST data from the form submission
        $post = $request->getPost();

        // Run validation on the submitted data
        // If validation fails, we redirect back with error messages
        if (! $validation->run($post)) {
            // Store validation errors in flashdata for display on the form
            $session->setFlashdata('errors', $validation->getErrors());
            // Store the submitted data so the form can be re-populated
            $session->setFlashdata('old', $post);
            // Redirect back to login form (Post-Redirect-Get pattern)
            return redirect()->back()->withInput();
        }

        // Extract email from the form data
        $email = $request->getPost('email');

        // Create a UsersModel instance to interact with the database
        $userModel = new UsersModel();

        // Query the database to find a user with this email address
        $user = $userModel->where('email', $email)->first();

        // If no user found with this email, show an error
        if (! $user) {
            $session->setFlashdata('errors', ['email' => 'No account found for that email']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        // Check if the user's email is activated (account verification)
        $user = $userModel->where('email', $email)->where('email_activated', 1)->first();

        // If account is not activated, prevent login
        if (! $user) {
            $session->setFlashdata('errors', ['email' => 'Account has been deactivated']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        // Verify the password against the stored hash
        // password_verify() is a PHP function that safely compares passwords
        if (! password_verify($request->getPost('password'), $user->password_hash ?? '')) {
            $session->setFlashdata('errors', ['password' => 'Incorrect password']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        // SUCCESS: User is authenticated!
        // Create a session with minimal user data (don't store sensitive info)
        // Use Entity object properties directly (more object-oriented approach)
        $session->set('user', [
            'id' => $user->id ?? null,
            'email' => $user->email ?? null,
            'first_name' => $user->first_name ?? null,
            'last_name' => $user->last_name ?? null,
            'type' => $user->type ?? 'client', // User role (client, manager, etc.)
            // Create a display name from first initial + middle initial + last name
            'display_name' => trim(($user->first_name[0] ?? '') . ' ' . ($user->middle_name[0] ?? '') . ' ' . ($user->last_name ?? '')),
        ]);

        // Handle "Remember Me" functionality
        // This extends the session lifetime for convenience
        $remember = (bool) $request->getPost('remember');
        if ($remember) {
            // Set session to last 30 days
            $lifetime = 30 * 24 * 60 * 60; // 30 days in seconds

            // Extend server-side session garbage collection time
            @ini_set('session.gc_maxlifetime', (string) $lifetime);

            // Update the browser cookie to persist for 30 days
            $params = session_get_cookie_params();
            setcookie(session_name(), session_id(), time() + $lifetime, $params['path'] ?? '/', $params['domain'] ?? '', isset($_SERVER['HTTPS']), true);
        } else {
            // For non-remember sessions, ensure cookie expires when browser closes
            $params = session_get_cookie_params();
            setcookie(session_name(), session_id(), 0, $params['path'] ?? '/', $params['domain'] ?? '', isset($_SERVER['HTTPS']), true);
        }

        // Redirect users to different pages based on their role
        // This is called "role-based access control" (RBAC)
        $type = strtolower($user->type ?? 'client');

        if ($type === 'admin') {
            // Managers go to admin dashboard
            return redirect()->to('/admin/dashboard');
        }

        if ($type === 'client') {
            // Regular clients go to home page
            return redirect()->to('/');
        }
    } // end login()

    /**
     * Process user logout
     *
     * POST /logout (or GET in some cases)
     * Destroys the user session and clears cookies
     */
    public function logout()
    {
        // Destroy the server-side session data
        session()->destroy();

        // Clear the session cookie from the user's browser
        // Set expiry to past time to delete the cookie
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 3600, $params['path'] ?? '/', $params['domain'] ?? '', isset($_SERVER['HTTPS']), true);

        // Redirect to home page
        return redirect()->to('/');
    }

    /**
     * Display the signup/registration page
     *
     * GET /signup
     * Shows the registration form to new users
     */
    public function showSignupPage()
    {
        // Get session service
        $session = session();

        // If already logged in, redirect to home (no need to register)
        if ($session->has('user')) {
            return redirect()->to('/');
        }

        // Get any previous errors or form data from flashdata
        $errors = $session->getFlashdata('errors') ?? [];
        $old = $session->getFlashdata('old') ?? [];

        // Show the signup form
        return view('/user/auth/signup', ['errors' => $errors, 'old' => $old]);
    }

    /**
     * Process signup form submission
     *
     * POST /signup
     * Creates new user account and automatically logs them in
     */
    public function signup()
    {
        // Get request and session services
        $request = service('request');
        $session = session();

        // Set up comprehensive validation rules for registration
        $validation = \Config\Services::validation();
        $validation->setRule('first_name', 'First name', 'required|min_length[2]|max_length[100]');
        $validation->setRule('middle_name', 'Middle name', 'permit_empty|max_length[100]'); // Optional field
        $validation->setRule('last_name', 'Last name', 'required|min_length[2]|max_length[100]');
        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required|min_length[6]');
        $validation->setRule('password_confirm', 'Password Confirmation', 'required|matches[password]');

        // Get all form data
        $post = $request->getPost();

        // Validate the input data
        if (! $validation->run($post)) {
            // Validation failed - store errors and redirect back
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        // Create UsersModel instance for database operations
        $userModel = new UsersModel();

        // Check if email is already registered (prevent duplicates)
        if ($userModel->where('email', $post['email'])->first()) {
            $session->setFlashdata('errors', ['email' => 'Email already registered']);
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        // Prepare user data for database insertion
        // Note: We hash passwords for security - never store plain text passwords!
        $data = [
            'first_name' => $post['first_name'],
            'middle_name' => $post['middle_name'] ?? null, // Optional field
            'last_name' => $post['last_name'],
            'email' => $post['email'],
            // Hash the password using PHP's password_hash() function
            'password_hash' => password_hash($post['password'], PASSWORD_DEFAULT),
            'type' => 'client', // New users are clients by default
            'account_status' => 1, // Active account
            'email_activated' => 0, // Email not verified yet (could be implemented later)
            'newsletter' => 1, // Subscribe to newsletter by default
        ];

        // Insert the new user into the database
        // The insert() method returns the new record ID on success
        $inserted = $userModel->insert($data);

        // Check if the insertion failed
        if ($inserted === false) {
            $session->setFlashdata('errors', ['general' => 'Could not create account']);
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        // SUCCESS: Account created!
        // Now automatically log in the new user (better UX)

        // Get the newly created user data from database
        $newUser = $userModel->find($inserted);

        // Set up session data for the new user (same as login process)
        $session->set('user', [
            'id' => $newUser->id ?? null,
            'email' => $newUser->email ?? null,
            'first_name' => $newUser->first_name ?? null,
            'last_name' => $newUser->last_name ?? null,
            'type' => $newUser->type ?? 'client',
            // Create display name: "J D Smith" format
            'display_name' => trim(($newUser->first_name[0] ?? '') . ' ' . ($newUser->middle_name[0] ?? '') . ' ' . ($newUser->last_name ?? '')),
        ]);

        // Set success message and redirect to home page
        $session->setFlashdata('success', 'Account created successfully. Welcome!');
        return redirect()->to('/');
    }
}
