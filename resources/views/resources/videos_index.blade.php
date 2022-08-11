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
                    <li class="breadcrumb-item"><a href="{{ route('adminusers.dashboard') }}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Our Videos</li>
                </ul>
                <a href="{{ route('resources.videos_add') }}" class="btn btn-sm btn-primary">Create New</a>
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

                    <!-- Table Start-->
                    <div class="body">
                        <?php if ($videos->count() > '0') { ?>
                            <div class="table-responsive check-all-parent">
                                <table class="table table-hover m-b-0 c_list">
                                    <thead class="bg-secondary">
                                        <tr>
                                            <th>#</th>
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
                                                <iframe class="embed-responsive-item" src="{{$video->video_url}}" width="150" height="50"></iframe>
                                            </td>
                                            <td>
                                                <a type="button" class="btn btn-info" href="{{ route('resources.videos_edit', $video['id']) }}" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a rel="tooltip" data-value="{{$video['id']}}" href="{{ route('resources.videos_delete',$video['id']) }}" class="delete btn btn-danger" title="Delete"><i class="fa fa-trash-o"></i></a>
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