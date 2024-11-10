<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class auth extends BaseController
{
    // Display the login form
    public function login(): string
    {
        return view('login'); // Make sure this is the correct view
    }

    // Handle the login form submission
    public function doLogin() // Change the return type to void
    {
        // Get the input from the form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Check credentials (username and password are hardcoded)
        if ($username === '223443042' && $password === '210503') {
            // Redirect to the dashboard on success
            return redirect()->to('/dashboarddesign');
        } else {
            // If login fails, return to login view with an error message
            return redirect()->to('/login')->with('error', 'Invalid username or password');
        }
    }

    public function logout(): void
    {
        // Implement logout functionality here
    }
}
