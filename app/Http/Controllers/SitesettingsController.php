<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sitesetting;
use Session;
use Image;

class SitesettingsController extends Controller
{

    public function index()
    {
        $id = 1;
        $detail = Sitesetting::where('id', '=', $id)->first();
        return view('sitesettings.index', ['detail' => $detail]);
    }
    public function update(Request $request,$id = null)
    {
        $validateData = $request->validate([
            'site_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
            'mobile_number' => 'required',
            'telephone_number' => 'required',
            'email' => 'required',
            'alternate_email' => 'required',
            'address' => 'required',
            'map_url' => 'required',
            'facebook_url' => 'required',
            'whatsapp_url' => 'required',
            'linkedin_url' => 'required',
            'instagram_url' => 'required',
            'twitter_url' => 'required',
            'logo' => 'mimes:jpg,jpeg,png',
            'favicon' => 'mimes:jpg,jpeg,png'
        ]);
        $sitesettings = Sitesetting::find($id);
        $sitesettings->site_title = $request->site_title;
        $sitesettings->meta_description = $request->meta_description;
        $sitesettings->meta_keywords = $request->meta_keywords;
        $sitesettings->mobile_number = $request->mobile_number;
        $sitesettings->telephone_number = $request->telephone_number;
        $sitesettings->email = $request->email;
        $sitesettings->alt_email = $request->alternate_email;
        $sitesettings->address = $request->address;
        $sitesettings->map_url = $request->map_url;
        $sitesettings->facebook_url = $request->facebook_url;
        $sitesettings->whatsapp_url = $request->whatsapp_url;
        $sitesettings->linkedin_url = $request->linkedin_url;
        $sitesettings->instagram_url = $request->instagram_url;
        $sitesettings->twitter_url = $request->twitter_url;

        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $new_image1 = date('Y-m-d-') . time() . "." . $image->extension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(150, 50);
            $destination_path = public_path('/images/sitesettings/');
            $image_resize->save($destination_path . $new_image1);
            $sitesettings->logo = $new_image1;
        }
        if ($request->hasFile('favicon')) {
            $images = $request->file('favicon');
            $new_image2 = date('Y-m-d-') . time() . "." . $images->extension();
            $image_resizes = Image::make($images->getRealPath());
            $image_resizes->resize(48, 48);
            $destination_paths = public_path('/images/sitesettings/');
            $image_resizes->save($destination_paths . $new_image2);
            $sitesettings->favicon = $new_image2;
        }
        $sitesettings->status = "Active";
        $sitesettings->save();
        Session::flash('message', 'Sitesettings Updated Successfully!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('sitesettings.index', []);
    }
}
