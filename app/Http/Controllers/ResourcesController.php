<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Expert;
use App\Models\Video;
use App\Models\Category;
use App\Models\Blog;
use Session;
use Image;

class ResourcesController extends Controller
{
    public function blogs()
    {
        return view('resources.blogs');
    }

    public function videos()
    {
        $videos = Video::where('status', '<>', 'Trash')->orderBy('id', 'desc');
        $videos = $videos->paginate(12);
        return view('resources.videos', ['videos' => $videos]);
    }

    //Admin - Our Blogs Index
    public function blogs_index()
    {
        $blogs = Blog::where('status', '<>', 'Trash')->orderBy('id', 'desc');
        if (!empty($_REQUEST['s'])) {
            $s = $_REQUEST['s'];
            $blogs->where(function ($query) use ($s) {
                $query->where('title', 'LIKE', "%$s%");
            });
        }
        if (!empty($_REQUEST['category'])) {
            $category = $_REQUEST['category'];
            $blogs->where(function ($query) use ($category) {
                $query->where('category', 'LIKE', "%$category%");
            });
        }
        $blogs = $blogs->paginate(10);
        return view('resources.blogs_index', ['blogs' => $blogs]);
    }

    //Admin - Our Blogs Add
    public function blogs_add()
    {
        return view('resources.blogs_add');
    }

    public function blogs_store(Request $request)
    {
        $validateData = $request->validate([
            'description' => 'required',
            'category' => 'required',
            'content' => 'required',
            'image' => 'required||mimes:jpg,jpeg,png',
            'title' => ['required', Rule::unique('blogs')->where(function ($query) use ($request) {
                return $query->where('title', $request->title)->where('status', '<>', 'Trash');
            })],
        ]);
        $blogs = new Blog();
        $blogs->title = $request->title;
        $blogs->description = $request->description;
        $blogs->category = $request->category;
        $blogs->content = $request->content;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $new_image1 = date('Y-m-d-') . time() . "." . $image->extension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(1080, 1080);
            $destination_path = public_path('/images/blogs/');
            $image_resize->save($destination_path . $new_image1);
            $blogs->image = $new_image1;
        }
        $blogs->status = "Active";
        $blogs->save();
        Session::flash('message', 'Blogs Details Added!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('resources.blogs_index', []);
    }

    //Admin - Our Blogs Edit
    public function blogs_edit($id = null)
    {
        $detail = Blog::where('id', '=', $id)->first();
        return view('resources.blogs_edit', ['detail' => $detail]);
    }

    public function blogs_update(Request $request, $id = null)
    {
        $validateData = $request->validate([
            'description' => 'required',
            'category' => 'required',
            'content' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
            'title' => ['required', Rule::unique('blogs')->where(function ($query) use ($request, $id) {
                return $query->where('title', $request->title)->where('id', '<>', $id)->where('status', '<>', 'Trash');
            })]
        ]);
        $blogs = Blog::find($id);
        $blogs->title = $request->title;
        $blogs->category = $request->category;
        $blogs->description = $request->description;
        $blogs->content = $request->content;
        if ($request->hasFile('image')) {
            $destination = public_path('images/blogs/' . $blogs->image);
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $image = $request->file('image');
            $new_image1 = date('Y-m-d-') . time() . "." . $image->extension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(1080, 1080);
            $destination_path = public_path('/images/blogs/');
            $image_resize->save($destination_path . $new_image1);
            $blogs->image = $new_image1;
        }
        $blogs->status = "Active";
        $blogs->save();
        Session::flash('message', 'Blogs Details Updated!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('resources.blogs_index', []);
    }

    //Admin - Our Blogs Delete
    public function blogs_delete($id = null)
    {
        $data = Blog::find($id);
        $destination = public_path('images/blogs/' . $data->image);
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $data->delete();
        Session::flash('message', 'Deleted Sucessfully!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('resources.blogs_index', []);
    }


    //Admin - Our Experts Index
    public function experts_index()
    {
        $experts = Expert::where('status', '<>', 'Trash')->orderBy('id', 'desc');
        if (!empty($_REQUEST['s'])) {
            $s = $_REQUEST['s'];
            $experts->where(function ($query) use ($s) {
                $query->where('name', 'LIKE', "%$s%");
            });
        }
        $experts = $experts->paginate(10);
        return view('resources.experts_index', ['experts' => $experts]);
    }

    //Admin - Our Experts Add
    public function experts_add()
    {
        return view('resources.experts_add');
    }

    public function experts_store(Request $request)
    {
        $validateData = $request->validate([
            'position' => 'required',
            'image' => 'required||mimes:jpg,jpeg,png',
            'name' => ['required', Rule::unique('experts')->where(function ($query) use ($request) {
                return $query->where('name', $request->name)->where('status', '<>', 'Trash');
            })],
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
        Session::flash('message', 'Experts Details Added!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('resources.experts_index', []);
    }

    //Admin - Our Experts Edit
    public function experts_edit($id = null)
    {
        $detail = Expert::where('id', '=', $id)->first();
        return view('resources.experts_edit', ['detail' => $detail]);
    }

    public function experts_update(Request $request, $id = null)
    {
        $validateData = $request->validate([
            'position' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
            'name' => ['required', Rule::unique('experts')->where(function ($query) use ($request, $id) {
                return $query->where('name', $request->name)->where('id', '<>', $id)->where('status', '<>', 'Trash');
            })]
        ]);
        $experts = Expert::find($id);
        $experts->name = $request->name;
        $experts->position = $request->position;
        $experts->twitter = $request->twitter;
        $experts->facebook = $request->facebook;
        $experts->linkedin = $request->linkedin;
        $experts->instagram = $request->instagram;
        if ($request->hasFile('image')) {
            $destination = public_path('images/experts/' . $experts->image);
            if (File::exists($destination)) {
                File::delete($destination);
            }
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
        Session::flash('message', 'Experts Details Updated!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('resources.experts_index', []);
    }

    //Admin - Our Experts Delete
    public function experts_delete($id = null)
    {
        $data = Expert::find($id);
        $destination = public_path('images/experts/' . $data->image);
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $data->delete();
        Session::flash('message', 'Deleted Sucessfully!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('resources.experts_index', []);
    }

    //Admin - Service Categories Index
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

    //Admin - Service Categories Add
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

    //Admin - Service Categories Edit
    public function admin_edit($id = null)
    {
        $detail = Category::where('id', '=', $id)->first();
        return view('resources.admin_edit', ['detail' => $detail]);
    }

    public function admin_update(Request $request, $id = null)
    {
        $validateData = $request->validate([
            'category_image' => 'mimes:jpg,jpeg,png',
            'category_name' => ['required', Rule::unique('categories')->where(function ($query) use ($request, $id) {
                return $query->where('category_name', $request->category_name)->where('id', '<>', $id)->where('status', '<>', 'Trash');
            })],
        ]);
        $categories = Category::find($id);
        $categories->category_name = $request->category_name;
        if ($request->hasFile('category_image')) {
            $destination = public_path('images/categories/' . $categories->category_image);
            if (File::exists($destination)) {
                File::delete($destination);
            }
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

    //Admin - Service Categories Delete
    public function admin_delete($id = null)
    {
        $data = Category::find($id);
        $destination = public_path('images/categories/' . $data->category_image);
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $data->delete();
        Session::flash('message', 'Deleted Sucessfully!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('resources.admin_index', []);
    }

    //Admin - Videos Index
    public function videos_index()
    {
        $videos = Video::where('status', '<>', 'Trash')->orderBy('id', 'desc');
        $videos = $videos->paginate(10);
        return view('resources.videos_index', ['videos' => $videos]);
    }

    //Admin - Videos Add
    public function videos_add()
    {
        return view('resources.videos_add');
    }

    public function videos_store(Request $request)
    {
        $validateData = $request->validate([
            'video_url' => ['required', Rule::unique('videos')->where(function ($query) use ($request) {
                return $query->where('video_url', $request->video_url)->where('status', '<>', 'Trash');
            })],
        ]);
        $videos = new Video();
        $videos->video_url = $request->video_url;
        $videos->status = "Active";
        $videos->save();
        Session::flash('message', 'Videos Added!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('resources.videos_index', []);
    }

    //Admin - Videos Edit
    public function videos_edit($id = null)
    {
        $detail = Video::where('id', '=', $id)->first();
        return view('resources.videos_edit', ['detail' => $detail]);
    }

    public function videos_update(Request $request, $id = null)
    {
        $validateData = $request->validate([
            'video_url' => ['required', Rule::unique('videos')->where(function ($query) use ($request, $id) {
                return $query->where('video_url', $request->video_url)->where('id', '<>', $id)->where('status', '<>', 'Trash');
            })],
        ]);
        $videos = Video::find($id);
        $videos->video_url = $request->video_url;
        $videos->status = "Active";
        $videos->save();
        Session::flash('message', 'Videos Updated!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('resources.videos_index', []);
    }

    //Admin - Videos Delete
    public function videos_delete($id = null)
    {
        $data = Video::find($id);
        $data->delete();
        Session::flash('message', 'Deleted Sucessfully!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('resources.videos_index', []);
    }
}
