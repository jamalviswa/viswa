@extends('layouts.back')
@section('content')
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Service Category</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Service Category</li>
                </ul>
                <a href="{{ url('admin/resources/add') }}" class="btn btn-sm btn-primary" title="">Create New</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>All Service Category List</h2>
                        <ul class="header-dropdown dropdown dropdown-animated scale-left">
                            <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search...">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <select class="custom-select">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <button type="button" class="btn btn-success"><i class="icon-magnifier"></i></button>
                                            <button type="button" class="btn btn-danger"><i class="icon-close"></i></button>
                                        </div>
                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Table Start-->
                    <div class="body">
                        <div class="table-responsive check-all-parent">
                            <table class="table table-hover m-b-0 c_list">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 50px;">
                                            1
                                        </td>
                                        <td>
                                            <p class="c_name">Web Design & Development</p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-success" title="View"><i class="fa fa-eye"></i></button>
                                            <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50px;">
                                            2
                                        </td>
                                        <td>
                                            <p class="c_name">App Development</p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-success" title="View"><i class="fa fa-eye"></i></button>
                                            <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50px;">
                                            3
                                        </td>
                                        <td>
                                            <p class="c_name">Digital Marketing</p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-success" title="View"><i class="fa fa-eye"></i></button>
                                            <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50px;">
                                            4
                                        </td>
                                        <td>
                                            <p class="c_name">Graphic Design</p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-success" title="View"><i class="fa fa-eye"></i></button>
                                            <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50px;">
                                            5
                                        </td>
                                        <td>
                                            <p class="c_name">E-Commerce Solution</p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-success" title="View"><i class="fa fa-eye"></i></button>
                                            <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50px;">
                                            6
                                        </td>
                                        <td>
                                            <p class="c_name">Software Development</p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-success" title="View"><i class="fa fa-eye"></i></button>
                                            <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50px;">
                                            7
                                        </td>
                                        <td>
                                            <p class="c_name">Message Provider</p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-success" title="View"><i class="fa fa-eye"></i></button>
                                            <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 50px;">
                                            8
                                        </td>
                                        <td>
                                            <p class="c_name">Hosting</p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-success" title="View"><i class="fa fa-eye"></i></button>
                                            <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Table End-->

                    <!-- Pagination showing Entries start-->
                    <div class="col-lg-12">
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <p>Showing 1 to 10 of 8 entries</p>
                                </div>
                                <!-- Pagination showing Entries End-->

                                <!-- Pagination Start-->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <nav aria-label="...">
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0);" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                            <li class="page-item active">
                                                <a class="page-link" href="javascript:void(0);">2 <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
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