<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expert;

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

    public function experts_index(){

        return view('resources.experts_index');
    }
    public function experts_add(){

        return view('resources.experts_add');
    }
    public function experts_store(Request $request){

        $validateData = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'image' => 'required||mimes:jpg,jpeg,png'
        ]);
        $experts = new Expert;
        $experts->name = $request->name;
        $experts->position = $request->position;
        $experts->twitter = $request->twitter;
        $experts->facebook = $request->facebook;
        $experts->linkedin = $request->linkedin;
        $experts->instagram = $request->instagram;
        $experts->status = "Active";
        $experts->save();
    }

    public function experts_edit(){

        return view('resources.experts_edit');
    }
}
