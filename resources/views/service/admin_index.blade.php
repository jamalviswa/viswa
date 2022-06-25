@extends('layouts.back')
@section('content')
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Our Services</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Our Services</li>
                </ul>
                <a href="{{ url('admin/services/add') }}" class="btn btn-sm btn-primary" title="">Create New</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>All Services List</h2>

                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12 mt-2">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search...">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 mt-2">
                                            <button type="button" class="btn btn-success"><i class="icon-magnifier"></i></button>
                                           
                                            <a href="{{ url('admin/services/index') }}" class="btn btn-danger"><i class="icon-close"></i></a>
                                          
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Table Start-->
                    <div class="body">
                      
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0 c_list">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                      
                                        <tr>
                                            <td style="width: 50px;">
                                               1
                                            </td>
                                            
                                            <td>
                                                <p class="c_name">App Development</p>
                                            </td>
                                            <td>
                                                <p>We develop Android mobile apps using the tools and techniques applied for the top apps in mobile applications</p>
                                            </td>
                                            <td>
                                                <img src="{{URL::to('images/blogs/olympic.jpg')}}" class="avatar" alt="VTS" width="100" height="50">
                                            </td>
                                            <td>
                                                <a href="{{ url('admin/services/edit') }}" class="btn btn-sm btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                                <!-- <a href="{{ url('admin/resources/experts/view') }}" class="btn btn-sm btn-success" title="View"><i class="fa fa-eye"></i></a> -->
                                                <a href="#" class="btn btn-sm btn-danger js-sweetalert" data-type="confirm" title="Delete"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                      


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
                                    <ul class="pagination justify-content-end">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0);" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                            <!-- <li class="page-item active">
                                                <a class="page-link" href="javascript:void(0);">2 <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li> -->
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination End-->
             
                </div>
            </div>
        </div>

    </div>
</div>
@endsection