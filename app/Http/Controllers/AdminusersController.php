<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminusersController extends Controller
{
    public function login()
    {
        return view('adminusers.login');
    }
    public function dashboard()
    {
        return view('adminusers.dashboard');
    }
    public function profile()
    {
        return view('adminusers.profile');
    }
}
