<?php
preg_match('/([a-z]*)@/i', Route::getCurrentRoute()->getActionName(), $matches);
$controller = $matches[1];
$action = explode('@', Route::getCurrentRoute()->getActionName())[1];
?>
<?php $sitesettings = App\Models\Sitesetting::first(); ?>
<!-- Sidebar Section Start-->
<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="{{ route('home.index') }}" target="_blank"><img src="{{URL::to('images/sitesettings/'.$sitesettings['logo'])}}" alt="VTS" class="img-fluid logo"></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="{{URL::to('images/ajith.jpg')}}" class="user-photo" alt="VTS Profile">
            </div>
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>{{auth()->user()->name}}</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="{{ route('adminusers.profile') }}"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="{{ route('adminusers.logout') }}"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">

                <!--Dashboard-->
                <li class="@if(($controller=='AdminusersController' && $action=='dashboard')) active @endif ">
                    <a href="{{route('adminusers.dashboard')}}">
                        <i class="icon-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <!--Dashboard-->

                <!--sitesettings-->
                <li class="@if(($controller=='SitesettingsController' && $action=='index')) active @endif ">
                    <a href="{{route('sitesettings.index')}}">
                        <i class="icon-settings"></i>
                        <span>Site Settings</span>
                    </a>
                </li>
                <!--sitesettings-->

                <!--Experts-->
                <li class="@if(($controller=='ResourcesController' && $action=='experts_index') || 
                 ($controller=='ResourcesController' && $action=='experts_add') ||
                 ($controller=='ResourcesController' && $action=='experts_edit') ) active @endif ">
                    <a href="{{route('resources.experts_index')}}">
                        <i class="icon-users"></i>
                        <span>Our Experts</span>
                    </a>
                </li>
                <!--Experts-->

                <!--clients-->
                <li class="@if(($controller=='AboutController' && $action=='admin_index') || 
                 ($controller=='AboutController' && $action=='admin_add') ||
                 ($controller=='AboutController' && $action=='admin_edit') ) active @endif ">
                    <a href="{{route('about.admin_index')}}">
                        <i class="icon-user"></i>
                        <span>Our Clients</span>
                    </a>
                </li>
                <!--clients-->

                <!--Services-->
                <li class="@if(($controller=='ServicesController' && $action=='admin_index') || 
                 ($controller=='ServicesController' && $action=='admin_add') ||
                 ($controller=='ServicesController' && $action=='admin_edit') ) active @endif ">
                    <a href="{{route('services.admin_index')}}">
                        <i class="icon-rocket"></i>
                        <span>Our Services</span>
                    </a>
                </li>
                <!--Services-->

                <!--Blogs-->
                <li class="@if(($controller=='ResourcesController' && $action=='blogs_index') || 
                 ($controller=='ResourcesController' && $action=='blogs_add') ||
                 ($controller=='ResourcesController' && $action=='blogs_edit') ) active @endif ">
                    <a href="{{route('resources.blogs_index')}}">
                        <i class="icon-globe"></i>
                        <span>Our Blogs</span>
                    </a>
                </li>
                <!--Blogs-->

                <!--Videos-->
                <li class="@if(($controller=='ResourcesController' && $action=='videos_index') || 
                 ($controller=='ResourcesController' && $action=='videos_add') ||
                 ($controller=='ResourcesController' && $action=='videos_edit') ) active @endif ">
                    <a href="{{route('resources.videos_index')}}">
                        <i class="icon-social-youtube"></i>
                        <span>Our Videos</span>
                    </a>
                </li>
                <!--Videos-->

                <!--Projects-->
                <li class="@if(($controller=='ProductController' && $action=='admin_index') || 
                 ($controller=='ProductController' && $action=='admin_add') ||
                 ($controller=='ProductController' && $action=='admin_edit') ) active @endif ">
                    <a href="{{route('products.admin_index')}}">
                        <i class="icon-folder"></i>
                        <span>Our Projects</span>
                    </a>
                </li>
                <!--Projects-->

                <!--Contact Enquiries-->
                <li class="@if(($controller=='ContactController' && $action=='admin_index') || 
                 ($controller=='ContactController' && $action=='admin_add') ) active @endif ">
                    <a href="{{route('contact.admin_index')}}">
                        <i class="icon-call-in"></i>
                        <span>Contact Enquiries</span>
                    </a>
                </li>
                <!--Contact Enquiries-->

                <!--Service Categories-->
                <li class="@if(($controller=='ResourcesController' && $action=='admin_index') || 
                 ($controller=='ResourcesController' && $action=='admin_add') ||
                 ($controller=='ResourcesController' && $action=='admin_edit') ) active @endif ">
                    <a href="{{route('resources.admin_index')}}">
                        <i class="icon-folder"></i>
                        <span>Service Categories</span>
                    </a>
                </li>
                <!--Service Categories-->

            </ul>
        </nav>
    </div>
</div>
<!-- Sidebar Section End-->