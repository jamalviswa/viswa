 <!-- Sidebar Section Start-->
 <div id="left-sidebar" class="sidebar">
     <div class="navbar-brand">
         <!-- <a href="index.html"><img src="{{URL::to('images/v_logo.png')}}" alt="VTS" class="img-fluid logo"></a> -->
         <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
     </div>
     <div class="sidebar-scroll">
         <div class="user-account">
             <div class="user_div">
                 <img src="{{URL::to('images/ajith.jpg')}}" class="user-photo" alt="VTS Profile">
             </div>
             <div class="dropdown">
                 <span>Welcome,</span>
                 <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Viswa Technology Solutions</strong></a>
                 <ul class="dropdown-menu dropdown-menu-right account">
                     <li><a href="{{ url('admin/profile') }}"><i class="icon-user"></i>My Profile</a></li>
                     <li><a href="{{ url('admin/login') }}"><i class="icon-power"></i>Logout</a></li>
                 </ul>
             </div>
         </div>
         <nav id="left-sidebar-nav" class="sidebar-nav">
             <ul id="main-menu" class="metismenu">
                 <li class="{{ Request::is('admin/dashboard') ? 'active':'' }}"><a href="{{ url('admin/dashboard') }}"><i class="icon-home"></i><span>Dashboard</span></a></li>
                 <li class="{{ Request::is('admin/sitesettings') ? 'active':'' }}"><a href="{{ url('admin/sitesettings') }}"><i class="icon-settings"></i><span>Site Settings</span></a></li>
                 <li class="{{ Request::is('admin/resources/experts/index') || Request::is('admin/resources/experts/add') || Request::is('admin/resources/experts/edit') ? 'active':'' }}"><a href="{{ url('admin/resources/experts/index') }}"><i class="icon-users"></i><span>Our Experts</span></a></li>
                 <li class="{{ Request::is('admin/about/index') || Request::is('admin/about/add') || Request::is('admin/about/edit') ? 'active':'' }}"><a href="{{ url('admin/about/index') }}"><i class="icon-user"></i><span>Our Clients</span></a></li>
                 <li class="{{ Request::is('admin/resources/blogs/index') || Request::is('admin/resources/blogs/add') || Request::is('admin/resources/blogs/edit') ? 'active':'' }}"><a href="{{ url('admin/resources/blogs/index') }}"><i class="icon-globe"></i><span>Our Blogs</span></a></li>
                 <li class="{{ Request::is('admin/contact/index') ? 'active':'' }}"><a href="{{ url('admin/contact/index') }}"><i class="icon-call-in"></i><span>Contact Enquiries</span></a></li>
                 <li class=""><a href=""><i class="icon-folder"></i><span>Our Projects</span></a></li>
                 <li class=""><a href=""><i class="icon-rocket"></i><span>Our Services</span></a></li>
                 <li class=""><a href=""><i class="icon-picture"></i><span>Banner</span></a></li>

                 <li class="{{ Request::is('admin/resources/index') || Request::is('admin/resources/add') ? 'active':'' }}">
                     <a href="#Tables" class="has-arrow"><i class="icon-folder-alt"></i><span>Master</span></a>
                     <ul>
                         <li class="{{ Request::is('admin/resources/index') || Request::is('admin/resources/add') ? 'active':'' }}"><a href="{{ url('admin/resources/index') }}">Service Categories</a></li>
                     </ul>
                 </li>
             </ul>
         </nav>
     </div>
 </div>
 <!-- Sidebar Section End-->