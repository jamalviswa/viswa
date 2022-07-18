@extends('layouts.back')
@section('content')
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Our Experts</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Our Experts</li>
                </ul>
                <a href="{{ url('admin/resources/experts/add') }}" class="btn btn-sm btn-primary">Create New</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>All Experts List</h2>

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
                                            <button type="submit" class="btn btn-success" name="search"><i class="icon-magnifier"></i></button>
                                            @if (isset($_REQUEST['search']))
                                            <a href="{{ url('admin/resources/experts/index') }}" class="btn btn-danger"><i class="icon-close"></i></a>
                                            @endif
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Table Start-->
                    <div class="body">
                    <?php if ($experts->count() > '0') { ?>
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0 c_list">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = ($experts->currentpage() - 1) * $experts->perpage() + 1; ?>
                                        @foreach($experts as $expert)
                                        <tr>
                                            <td style="width: 50px;">
                                                {{ $i }}
                                            </td>
                                            <td>
                                                <img src="{{URL::to('images/experts/'.$expert->image.'')}}" class="avatar" alt="VTS" width="100" height="50">
                                            </td>
                                            <td>
                                                <p class="c_name">{{$expert->name}}</p>
                                            </td>
                                            <td>
                                                <p class="c_name">{{$expert->position}}</p>
                                            </td>
                                            <td>
                                            <a type="button" class="btn btn-info" href="{{ route('resources.experts_edit', $expert['id']) }}" title="Edit"><i class="fa fa-edit"></i></a>
                                            <a rel="tooltip" data-value="{{$expert['id']}}" href="{{ route('resources.experts_delete',$expert['id']) }}" class="delete btn btn-danger" title="Delete"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                        $i++;
                                        ?>
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
                                        {{ $experts->links('layouts.pagination') }}
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