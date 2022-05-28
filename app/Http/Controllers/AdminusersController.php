<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminusersController extends Controller
{
    public function login()
    {
        return view('adminusers.login');
    }
}
