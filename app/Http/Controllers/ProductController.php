<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Product;
use Session;
use Image;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('status', '<>', 'Trash')->orderBy('id', 'desc')->get();
        return view('products.index',['products'=>$products]);
    }

    //Admin - Our Projects Index
    public function admin_index()
    {
        $products = Product::where('status', '<>', 'Trash')->orderBy('id', 'desc');
        if (!empty($_REQUEST['s'])) {
            $s = $_REQUEST['s'];
            $products->where(function ($query) use ($s) {
                $query->where('title', 'LIKE', "%$s%");
            });
        }
        if (!empty($_REQUEST['category'])) {
            $category = $_REQUEST['category'];
            $products->where(function ($query) use ($category) {
                $query->where('category', 'LIKE', "%$category%");
            });
        }
        $products = $products->paginate(10);
        return view('products.admin_index', ['products' => $products]);
    }

    //Admin - Our Projects Add
    public function admin_add()
    {
        return view('products.admin_add');
    }

    public function admin_store(Request $request)
    {
        $validateData = $request->validate([
            'category' => 'required',
            'image' => 'required||mimes:jpg,jpeg,png,gif',
            'title' => ['required', Rule::unique('products')->where(function ($query) use ($request) {
                return $query->where('title', $request->title)->where('status', '<>', 'Trash');
            })],
        ]);
        $products = new Product();
        $products->title = $request->title;
        $products->category = $request->category;
        $products->project_link = $request->project_link;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $new_image = date('Y-m-d-') . time() . "." . $image->extension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(1080, 1080);
            $destination_path = public_path('/images/products/');
            $image_resize->save($destination_path . $new_image);
            $products->image = $new_image;
        }
        $products->status = "Active";
        $products->save();
        Session::flash('message', 'Product Details Added!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('products.admin_index', []);
    }

    //Admin - Our Projects Edit
    public function admin_edit($id = null)
    {
        $detail = Product::where('id', '=', $id)->first();
        return view('products.admin_edit', ['detail' => $detail]);
    }

    public function admin_update(Request $request, $id = null)
    {
        $validateData = $request->validate([
            'category' => 'required',
            'image' => 'mimes:jpg,jpeg,png,gif',
            'title' => ['required', Rule::unique('products')->where(function ($query) use ($request, $id) {
                return $query->where('title', $request->title)->where('id', '<>', $id)->where('status', '<>', 'Trash');
            })],
        ]);
        $products = Product::find($id);
        $products->title = $request->title;
        $products->category = $request->category;
        $products->project_link = $request->project_link;
        if ($request->hasFile('image')) {
            $destination = public_path('images/products/' . $products->image);
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $image = $request->file('image');
            $new_image1 = date('Y-m-d-') . time() . "." . $image->extension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(1080, 1080);
            $destination_path = public_path('/images/products/');
            $image_resize->save($destination_path . $new_image1);
            $products->image = $new_image1;
        }
        $products->status = "Active";
        $products->save();
        Session::flash('message', 'Product Details Updated!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('products.admin_index', []);
    }

    //Admin - Our Projects Delete
    public function admin_delete($id = null)
    {
        $data = Product::find($id);
        $destination = public_path('images/products/' . $data->image);
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $data->delete();
        Session::flash('message', 'Deleted Sucessfully!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('products.admin_index', []);
    }
}
