@extends('layouts.back')
@section('content')
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Contact Enquiries</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('adminusers.dashboard') }}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Contact Enquiries</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>All Contact Enquiries List</h2>      
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
                                            <a href="{{ route('contact.admin_index') }}" class="btn btn-danger"><i class="icon-close"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Table Start-->
                    <div class="body">
                    <?php if ($contacts->count() > '0') { ?>
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0 c_list">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i = ($contacts->currentpage() - 1) * $contacts->perpage() + 1; ?>
                                        @foreach($contacts as $contact)
                                    <tr>
                                        <td style="width: 50px;">
                                        {{ $i }}
                                        </td>
                                        <td>
                                        <p class="c_name">{{$contact->name}}</p>
                                        </td>
                                        <td>
                                        <p>{{$contact->email}}</p>
                                        </td>
                                        <td>
                                        <p>{{$contact->subject}}</p>
                                        </td>
                                        <td>
                                                <a rel="tooltip" data-value="{{$contact['id']}}" href="{{ route('contact.admin_delete',$contact['id']) }}" class="delete btn btn-danger" title="Delete"><i class="fa fa-trash-o"></i></a>
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
                                        {{ $contacts->links('layouts.pagination') }}
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