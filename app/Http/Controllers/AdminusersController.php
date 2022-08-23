<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Adminuser;
use App\Models\Contact;
use App\Models\Blog;
use App\Models\Video;
use App\Models\Expert;
use App\Models\Client;
use App\Models\Product;
use Session;

class AdminusersController extends Controller
{
    // Admin - Register
    public function register()
    {
        return view('adminusers.register');
    }

    public function register_store(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required',
            'password' => 'required',
            'name' => 'required'
        ]);
        $adminuser = new Adminuser();
        $adminuser->email = $request->email;
        $adminuser->name = $request->name;
        $adminuser->password_text = $request->password;
        $adminuser->password = Hash::make($request->password);
        $adminuser->status = "Active";
        $adminuser->save();
        Auth::login($adminuser);
        Session::flash('message', 'Register Successfully!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('adminusers.login', []);
    }

    // Admin - Login
    public function login()
    {
        return view('adminusers.login');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $adminuser = Adminuser::where('email', $email)->first();
            Auth::login($adminuser);
            Session::flash('message', 'Login Successfully!');
            Session::flash('alert-class', 'success');
            return \Redirect::route('adminusers.dashboard', []);
        } else {
            Session::flash('message', 'Invalid Credentials!');
            Session::flash('alert-class', 'error');
            return \Redirect::route('adminusers.login', []);
        }
    }

    // Admin - Logout
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return \Redirect::route('adminusers.login', []);
    }

    // Admin - Dashboard
    public function dashboard()
    {
        $contacts = Contact::where('status', 'Active')->count();
        $blogs = Blog::where('status', 'Active')->count();
        $videos = Video::where('status', 'Active')->count();
        $clients = Client::where('status', 'Active')->count();
        $projects = Product::where('status', 'Active')->count();
        $experts = Expert::where('status', 'Active')->count();
        return view('adminusers.dashboard', ['contacts' => $contacts, 'blogs' => $blogs, 'videos' => $videos, 'clients' => $clients, 'projects' => $projects, 'experts' => $experts]);
    }
    public function profile()
    {
        return view('adminusers.profile');
    }
    public function forgot()
    {
        return view('adminusers.forgot');
    }
}
