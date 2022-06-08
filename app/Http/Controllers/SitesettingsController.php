<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesettingsController extends Controller
{
    public function index(){
        return view('sitesettings.index');
    }
}
