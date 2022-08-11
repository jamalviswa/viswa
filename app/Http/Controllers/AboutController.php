<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Client;
use Session;
use Image;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.index');
    }

    //Admin - Clients Index
    public function admin_index()
    {
        $clients = Client::where('status', '<>', 'Trash')->orderBy('id', 'desc');
        $clients = $clients->paginate(10);
        return view('about.admin_index', ['clients' => $clients]);
    }

    //Admin - Clients Add 
    public function admin_add()
    {
        return view('about.admin_add');
    }

    public function admin_store(Request $request)
    {
        $validateData = $request->validate([
            'image' => 'required||mimes:jpg,jpeg,png,gif'
        ]);
        $clients = new Client();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $new_image1 = date('Y-m-d-') . time() . "." . $image->extension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(150, 50);
            $destination_path = public_path('/images/clients/');
            $image_resize->save($destination_path . $new_image1);
            $clients->image = $new_image1;
        }
        $clients->status = "Active";
        $clients->save();
        Session::flash('message', 'Client Added!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('about.admin_index', []);
    }

    //Admin - Clients Edit 
    public function admin_edit($id = null)
    {
        $detail = Client::where('id', '=', $id)->first();
        return view('about.admin_edit', ['detail' => $detail]);
    }

    public function admin_update(Request $request, $id = null)
    {
        $validateData = $request->validate([
            'image' => 'mimes:jpg,jpeg,png,gif'
        ]);
        $clients = Client::find($id);
        if ($request->hasFile('image')) {
            $destination = public_path('images/clients/' . $clients->image);
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $image = $request->file('image');
            $new_image1 = date('Y-m-d-') . time() . "." . $image->extension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(150, 50);
            $destination_path = public_path('/images/clients/');
            $image_resize->save($destination_path . $new_image1);
            $clients->image = $new_image1;
        }
        $clients->status = "Active";
        $clients->save();
        Session::flash('message', 'Client Updated!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('about.admin_index', []);
    }

    //Admin - Clients Delete 
    public function admin_delete($id = null)
    {
        $data = Client::find($id);
        $destination = public_path('images/clients/' . $data->image);
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $data->delete();
        Session::flash('message', 'Deleted Sucessfully!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('about.admin_index', []);
    }
}
