<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

        return view('contact.index');
    }

    public function admin_index(){

        return view('contact.admin_index');
    }
}
