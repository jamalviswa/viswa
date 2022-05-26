<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    public function blogs(){

        return view('resources.blogs');
    }
    public function videos(){

        return view('resources.videos');
    }
}
