<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    public function index(){

        return view('resources.index');
    }
    public function add(){

        return view('resources.add');
    }
    public function blogs(){

        return view('resources.blogs');
    }
    public function videos(){

        return view('resources.videos');
    }

    
    public function experts_add(){

        return view('resources.experts_add');
    }
    public function experts_edit(){

        return view('resources.experts_edit');
    }
}
