<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
    public function showLandingPage()
    {
        return view('user/landingPage');
    }

    public function showMoodboard()
    {
        return view('user/moodboard');
    }

    public function showRoadmap()
    {
        return view('user/roadmap');
    }
}
