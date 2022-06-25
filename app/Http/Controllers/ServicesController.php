<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){

        return view('service.index');
    }

    public function admin_index(){

        return view('service.admin_index');
    }

    public function admin_add(){

        return view('service.admin_add');
    }


}
