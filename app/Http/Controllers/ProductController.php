<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        return view('product.index');
    }

    public function admin_index(){

        return view('product.admin_index');
    }

    public function admin_add(){

        return view('product.admin_add');
    }
}
