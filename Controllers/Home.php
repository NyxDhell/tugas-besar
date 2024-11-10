<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return $this->dashboarddesign(); // Redirect to the dashboard view
    }

    public function dashboarddesign(): string
    {
        return view('dashboarddesign'); // Ensure this is the correct view
    }

    public function about(): string
    {
        return view('about'); // Ensure this is the correct view
    }

    public function feedback(): string
    {
        return view('feedback'); // Ensure this is the correct view
    }
}
