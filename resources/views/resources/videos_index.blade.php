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
                <a href="{{ url('admin/resources/videos/add') }}" class="btn btn-sm btn-primary" title="">Create New</a>
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
                                        <th>Title</th>
                                        <th>Video</th>
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
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3m81RA-qrAY?controls=0" width="150" height="50"></iframe>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                            <!-- <button type="button" class="btn btn-success" title="View"><i class="fa fa-eye"></i></button> -->
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