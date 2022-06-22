<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expert;
use Session;
use Image;

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
        $experts = new Expert();
        $experts->name = $request->name;
        $experts->position = $request->position;
        $experts->twitter = $request->twitter;
        $experts->facebook = $request->facebook;
        $experts->linkedin = $request->linkedin;
        $experts->instagram = $request->instagram;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $new_image1 = date('Y-m-d-').time().".".$image->extension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(250,250);
            $destination_path = public_path('/images/experts/');
            $image_resize->save($destination_path . $new_image1);
            $experts->image = $new_image1;
        }
        $experts->status = "Active";
        $experts->save();
        Session::flash('message', 'Experts Added!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('resources.experts_index', []);
    }

    public function experts_edit(){

        return view('resources.experts_edit');
    }
}
