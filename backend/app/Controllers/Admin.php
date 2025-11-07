<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use CodeIgniter\HTTP\ResponseInterface;

/**
 * Admin Controller - Handles Administrative Dashboard and Management
 *
 * This controller manages admin-only functionality and enforces role-based access control.
 * Only authenticated users with 'manager' role can access admin pages.
 *
 * Key Concepts:
 * - Role-Based Access Control (RBAC): Restricts access based on user roles
 * - Session Authentication: Uses CodeIgniter sessions to verify user login state
 * - User Types: 'manager' (admin access), 'employee' (staff), 'client' (customers)
 * - HTTP 403 Forbidden: Shows error page instead of redirecting for unauthorized access
 */

class Admin extends BaseController
{

    public function showDashboard()
    {
        return view('user/admin/dashboard');
    }

    public function showEmployeeCreation()
    {
        return view('user/admin/employeeCreation');
    }
}
