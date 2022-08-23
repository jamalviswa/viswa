<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Session;

class ContactController extends Controller
{
    public function index(){

        return view('contact.index');
    }

    //Admin - Contact Enquiries Index
    public function admin_index()
    {
        $contacts = Contact::where('status', '<>', 'Trash')->orderBy('id', 'desc');
        if (!empty($_REQUEST['s'])) {
            $s = $_REQUEST['s'];
            $contacts->where(function ($query) use ($s) {
                $query->where('name', 'LIKE', "%$s%");
            });
        }
        $contacts = $contacts->paginate(10);
        return view('contact.admin_index', ['contacts' => $contacts]);
    }

     //Admin - Contact Enquiries Delete
     public function admin_delete($id = null)
     {
         $data = Contact::find($id);
         $data->delete();
         Session::flash('message', 'Deleted Sucessfully!');
         Session::flash('alert-class', 'success');
         return \Redirect::route('contact.admin_index', []);
     }
}
