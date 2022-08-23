@extends('layouts.back')
@section('content')
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Our Blogs</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('adminusers.dashboard') }}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Our Blogs</li>
                </ul>
                <a href="{{ route('resources.blogs_add') }}" class="btn btn-sm btn-primary">Create New</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>All Blogs List</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <form method="GET" action="#">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12 mt-2">
                                            <div class="input-group">
                                                <input type="text" name="s" class="form-control" placeholder="Search..." autocomplete="off" @if(isset($_REQUEST['s'])) value="{{ $_REQUEST['s'] }}" @else value="" @endif>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 mt-2">
                                            <select class="custom-select" name="category">
                                                <?php
                                                $categories = App\Models\Category::where('status', 'Active')->orderby('id', 'asc')->get();
                                                ?>
                                                <option value="">Select Category</option>
                                                <?php foreach ($categories as $category) { ?>
                                                    <option @if(isset($_REQUEST['category']) && $_REQUEST['category']==$category['id']) selected @endif value="{{ $category['id'] }}">{{ $category['category_name'] }}</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 mt-2">
                                            <button type="submit" class="btn btn-success" name="search"><i class="icon-magnifier"></i></button>
                                            @if (isset($_REQUEST['search']))
                                            <a href="{{ route('resources.blogs_index') }}" class="btn btn-danger"><i class="icon-close"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Table Start-->
                    <div class="body">
                        <?php if ($blogs->count() > '0') { ?>
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0 c_list">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = ($blogs->currentpage() - 1) * $blogs->perpage() + 1; ?>
                                        @foreach($blogs as $blog)
                                        <tr>
                                            <td style="width: 50px;">
                                                {{ $i }}
                                            </td>
                                            <td>
                                                <p class="c_name">{{$blog->title}}</p>
                                            </td>
                                            <td>
                                                <?php
                                                $categories = App\Models\Category::where('id', $blog['category'])->first();
                                                ?>
                                                <p class="c_name">{{$categories->category_name}}</p>
                                            </td>
                                            <td>
                                                <p>{{$blog->description}}</p>
                                            </td>
                                            <td>
                                                <a href="{{URL::to('images/blogs/'.$blog['image'].'')}}" target="_blank">
                                                    <img src="{{URL::to('images/blogs/'.$blog->image.'')}}" class="avatar" alt="VTS" width="100" height="50">
                                                </a>
                                            </td>
                                            <td>
                                                <a type="button" class="btn btn-info" href="{{ route('resources.blogs_edit', $blog['id']) }}" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a rel="tooltip" data-value="{{$blog['id']}}" href="{{ route('resources.blogs_delete',$blog['id']) }}" class="delete btn btn-danger" title="Delete"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </div>
                    <!-- Table End-->

                    <!-- Pagination Start-->
                    <div class="col-lg-12">
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <nav aria-label="...">
                                        {{ $blogs->links('layouts.pagination') }}
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination End-->

                <?php } else { ?>
                    <div class="text-center">
                        <img src="{{URL::to('images/no-record.png')}}">
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection