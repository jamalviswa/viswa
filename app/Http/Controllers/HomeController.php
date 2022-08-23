<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class HomeController extends Controller
{
    public function index()
    {
        $clients = Client::orderBy('id','desc')->get();
        return view('home.index', ['clients' => $clients]);
    }
}
