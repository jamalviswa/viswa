@extends('layouts.back')
@section('content')
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Our Videos</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Our Videos</li>
                </ul>
                <a href="{{ url('admin/resources/videos/add') }}" class="btn btn-sm btn-primary">Create New</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>All Our Videos List</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <!-- Search Section Start-->
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <form method="GET" action="#">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12 mt-2">
                                            <div class="input-group">
                                                <input type="text" name="s" class="form-control" placeholder="Search..." autocomplete="off" @if(isset($_REQUEST['s'])) value="{{ $_REQUEST['s'] }}" @else value="" @endif>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 mt-2">
                                            <button type="submit" class="btn btn-success" name="search"><i class="icon-magnifier"></i></button>
                                            @if (isset($_REQUEST['search']))
                                            <a href="{{ url('admin/resources/videos/index') }}" class="btn btn-danger"><i class="icon-close"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Search Section End-->
                        </div>
                    </div>
                    <!-- Table Start-->
                    <div class="body">
                        <?php if ($videos->count() > '0') { ?>
                            <div class="table-responsive check-all-parent">
                                <table class="table table-hover m-b-0 c_list">
                                    <thead class="bg-secondary">
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Video</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = ($videos->currentpage() - 1) * $videos->perpage() + 1; ?>
                                        @foreach($videos as $video)
                                        <tr>
                                            <td style="width: 50px;">
                                                {{ $i }}
                                            </td>
                                            <td>
                                                <p class="c_name">{{$video->title}}</p>
                                            </td>
                                            <td>
                                                <iframe class="embed-responsive-item" src="{{$video->video_url}}" width="150" height="50"></iframe>
                                            </td>
                                            <td>
                                                <!-- <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button> -->
                                                <!-- <button type="button" class="btn btn-success" title="View"><i class="fa fa-eye"></i></button> -->
                                                <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </div>
                    <!-- Table End-->
                    <div class="col-lg-12">
                        <div class="body">
                            <div class="row">
                                <!-- Pagination Start-->
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <nav aria-label="...">
                                        {{ $videos->links('layouts.pagination') }}
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