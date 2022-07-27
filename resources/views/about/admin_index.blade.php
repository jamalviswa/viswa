@extends('layouts.back')
@section('content')
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Our Clients</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Our Clients</li>
                </ul>
                <a href="{{ url('admin/about/add') }}" class="btn btn-sm btn-primary">Create New</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>All Clients List</h2>
                    </div>
                    
                    <!-- Table Start-->
                    <div class="body">
                        <?php if ($clients->count() > '0') { ?>
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0 c_list">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = ($clients->currentpage() - 1) * $clients->perpage() + 1; ?>
                                        @foreach($clients as $client)
                                        <tr>
                                            <td style="width: 50px;">
                                                {{ $i }}
                                            </td>
                                            <td>
                                                <img src="{{URL::to('images/clients/'.$client->image.'')}}" class="img-fluid logo" alt="VTS" width="150" height="50">
                                            </td>
                                            <td>
                                                <a type="button" class="btn btn-info" href="{{ route('about.admin_edit', $client['id']) }}" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a rel="tooltip" data-value="{{$client['id']}}" href="{{ route('about.admin_delete',$client['id']) }}" class="delete btn btn-danger" title="Delete"><i class="fa fa-trash-o"></i></a>
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
                                        {{ $clients->links('layouts.pagination') }}
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