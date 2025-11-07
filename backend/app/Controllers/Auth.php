<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Auth extends BaseController
{

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
        return view('auth/login', ['errors' => $errors, 'old' => $old]);
    }

    public function login()
    {
        $session = session();

        // Form validation rules
        $validation = \Config\Services::validation();
        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required');

        $post = $request->getPost();

        if (! $validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        $email = $request->getPost('email');

        $userModel = new \App\Models\UsersModel();

        $user = $userModel->where('email', $email)->first();

        if (! $user) {
            $session->setFlashdata('errors', ['email' => 'No account found for that email']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        $userArr = is_array($user) ? $user : (method_exists($user, 'toArray') ? $user->toArray() : (array) $user);

        if (! password_verify($request->getPost('password'), $userArr['password_hash'] ?? '')) {
            $session->setFlashdata('errors', ['password' => 'Incorrect password']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        $session->set('user', [
            'id' => $userArr['id'] ?? null,
            'email' => $userArr['email'] ?? null,
            'first_name' => $userArr['first_name'] ?? null,
            'last_name' => $userArr['last_name'] ?? null,
            'type' => $userArr['type'] ?? 'client',
            'display_name' => trim(($userArr['first_name'][0] ?? '') . ' ' . ($userArr['middle_name'][0] ?? '') . ' ' . ($userArr['last_name'] ?? '')),
        ]);

        $type = strtolower($userArr['type'] ?? 'client');


        //
        if ($type === 'manager') {
            return redirect()->to('user/admin/dashboard');
        }

        if ($type === 'client') {
            return redirect()->to('/');
        }
    }
}
