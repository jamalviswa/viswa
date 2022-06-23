<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Session;
use Image;

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

    public function admin_store(Request $request){

        $validateData = $request->validate([
            'image' => 'required||mimes:jpg,jpeg,png'
        ]);
        $clients = new Client();
        if($request->hasFile('image')){
            $image = $request->file('image');
            $new_image1 = date('Y-m-d-').time().".".$image->extension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(150,50);
            $destination_path = public_path('/images/clients/');
            $image_resize->save($destination_path . $new_image1);
            $clients->image = $new_image1;
        }
        $clients->status = "Active";
        $clients->save();
        Session::flash('message', 'Clients Added!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('about.admin_index', []);
    }

    public function admin_edit(){
        return view('about.admin_edit');
    }
}
