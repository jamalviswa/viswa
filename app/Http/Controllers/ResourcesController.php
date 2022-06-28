<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Expert;
use App\Models\Video;
use App\Models\Category;
use Session;
use Image;

class ResourcesController extends Controller
{
    //Service Categories Index Section
    public function admin_index()
    {
        $categories = Category::where('status', '<>', 'Trash')->orderBy('id', 'desc');
        if (!empty($_REQUEST['s'])) {
            $s = $_REQUEST['s'];
            $categories->where(function ($query) use ($s) {
                $query->where('category_name', 'LIKE', "%$s%");
            });
        }
        $categories = $categories->paginate(10);
        return view('resources.admin_index', ['categories' => $categories]);
    }

    //Service Categories Add Section
    public function admin_add()
    {
        return view('resources.admin_add');
    }
    public function admin_store(Request $request)
    {
        $validateData = $request->validate([
            'category_image' => 'required||mimes:jpg,jpeg,png',
            'category_name' => ['required', Rule::unique('categories')->where(function ($query) use ($request) {
                return $query->where('category_name', $request->category_name)->where('status', '<>', 'Trash');
            })],
        ]);
        $categories = new Category();
        $categories->category_name = $request->category_name;
        if ($request->hasFile('category_image')) {
            $image = $request->file('category_image');
            $new_image1 = date('Y-m-d-') . time() . "." . $image->extension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(16, 16);
            $destination_path = public_path('/images/categories/');
            $image_resize->save($destination_path . $new_image1);
            $categories->category_image = $new_image1;
        }
        $categories->status = "Active";
        $categories->save();
        Session::flash('message', 'Category Added!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('resources.admin_index', []);
    }

    public function admin_edit($id = null)
    {
        $detail = Category::find($id);
        return view('resources/admin_edit', ['detail' => $detail]);
    }

    public function admin_update(Request $request)
    {
        $id = $request->id;
        $validateData = $request->validate([
            'category_name' => ['required', Rule::unique('categories')->where(function ($query) use ($request, $id) {
                return $query->where('category_name', $request->category_name)->where('id', '<>', $id)->where('status', '<>', 'Trash');
            })],
        ]);
        $categories = Category::find($id);
        $categories->category_name = $request->category_name;
        if ($request->hasFile('category_image')) {
            $image = $request->file('category_image');
            $new_image1 = date('Y-m-d-') . time() . "." . $image->extension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(16, 16);
            $destination_path = public_path('/images/categories/');
            $image_resize->save($destination_path . $new_image1);
            $categories->category_image = $new_image1;
        }
        $categories->status = "Active";
        $categories->save();
        Session::flash('message', 'Category Updated!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('resources.admin_index', []);
    }

    public function admin_delete($id = null)
    {
        $data = Category::find($id);
        $destination = public_path('images/categories/'.$data->category_image);
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $data->delete();
        Session::flash('message', 'Deleted Sucessfully!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('resources.admin_index', []);
    }

    //Index of Videos
    public function videos_index()
    {
        $videos = Video::where('status', '<>', 'Trash')->orderBy('id', 'desc');
        if (!empty($_REQUEST['s'])) {
            $s = $_REQUEST['s'];
            $videos->where(function ($query) use ($s) {
                $query->where('title', 'LIKE', "%$s%");
            });
        }
        $videos = $videos->paginate(10);
        return view('resources.videos_index', ['videos' => $videos]);
    }

    //Add of Videos
    public function videos_add()
    {
        return view('resources.videos_add');
    }

    //Store of Videos
    public function videos_store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'video_url' => 'required'
        ]);
        $videos = new Video();
        $videos->title = $request->title;
        $videos->video_url = $request->video_url;
        $videos->status = "Active";
        $videos->save();
        Session::flash('message', 'Videos Added!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('resources.videos_index', []);
    }

    public function videos_delete()
    {

        return view('resources.experts_edit');
    }


    public function blogs()
    {

        return view('resources.blogs');
    }
    public function videos()
    {

        return view('resources.videos');
    }

    public function blogs_index()
    {

        return view('resources.blogs_index');
    }

    public function blogs_add()
    {

        return view('resources.blogs_add');
    }

    public function experts_index()
    {

        $experts = Expert::paginate(3);
        //return $experts;
        //$experts = $experts->paginate(3);
        return view('resources.experts_index', ['experts' => $experts]);
    }
    public function experts_add()
    {

        return view('resources.experts_add');
    }
    public function experts_store(Request $request)
    {

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
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $new_image1 = date('Y-m-d-') . time() . "." . $image->extension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(250, 250);
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

    public function experts_edit()
    {

        return view('resources.experts_edit');
    }
}
