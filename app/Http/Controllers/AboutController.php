<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('about.index');
    }

    public function admin_index(){
        return view('about.admin_index');
    }

    public function admin_add(){
        return view('about.admin_add');
    }

    public function admin_edit(){
        return view('about.admin_edit');
    }
}
