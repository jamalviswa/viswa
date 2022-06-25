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

                 <!--Dashboard-->
                 <li class="{{ Request::is('admin/dashboard') ? 'active':'' }}">
                     <a href="{{ url('admin/dashboard') }}">
                         <i class="icon-home"></i>
                         <span>Dashboard</span>
                     </a>
                 </li>

                 <!--sitesettings-->
                 <li class="{{ Request::is('admin/sitesettings') ? 'active':'' }}">
                     <a href="{{ url('admin/sitesettings') }}">
                         <i class="icon-settings"></i>
                         <span>Site Settings</span>
                     </a>
                 </li>

                 <!--Experts-->
                 <li class="{{ Request::is('admin/resources/experts/index') || Request::is('admin/resources/experts/add') || Request::is('admin/resources/experts/edit') ? 'active':'' }}">
                     <a href="{{ url('admin/resources/experts/index') }}">
                         <i class="icon-users"></i>
                         <span>Our Experts</span>
                     </a>
                 </li>

                 <!--clients-->
                 <li class="{{ Request::is('admin/about/index') || Request::is('admin/about/add') || Request::is('admin/about/edit') ? 'active':'' }}">
                     <a href="{{ url('admin/about/index') }}">
                         <i class="icon-user"></i>
                         <span>Our Clients</span>
                     </a>
                 </li>

                 <!--Blogs-->
                 <li class="{{ Request::is('admin/resources/blogs/index') || Request::is('admin/resources/blogs/add') || Request::is('admin/resources/blogs/edit') ? 'active':'' }}">
                     <a href="{{ url('admin/resources/blogs/index') }}">
                         <i class="icon-globe"></i>
                         <span>Our Blogs</span>
                     </a>
                 </li>

                 <!--Services-->
                 <li class="{{ Request::is('admin/services/index') || Request::is('admin/services/add') || Request::is('admin/services/edit') ? 'active':'' }}">
                     <a href="{{ url('admin/services/index') }}">
                         <i class="icon-rocket"></i>
                         <span>Our Services</span>
                     </a>
                 </li>

                 <!--Enquiries-->
                 <li class="{{ Request::is('admin/contact/index') ? 'active':'' }}">
                     <a href="{{ url('admin/contact/index') }}">
                         <i class="icon-call-in"></i>
                         <span>Contact Enquiries</span>
                     </a>
                 </li>

                 <!--Videos-->
                 <li class="{{ Request::is('admin/resources/videos/index') || Request::is('admin/resources/videos/add') || Request::is('admin/resources/videos/edit') ? 'active':'' }}">
                     <a href="{{ url('admin/resources/videos/index') }}">
                         <i class="icon-social-youtube"></i>
                         <span>Our Videos</span>
                     </a>
                 </li>

                 <!--Projects-->
                 <li class="{{ Request::is('admin/products/index') || Request::is('admin/products/add') || Request::is('admin/products/edit') ? 'active':'' }}">
                     <a href="{{ url('admin/products/index') }}">
                         <i class="icon-folder"></i>
                         <span>Our Projects</span>
                     </a>
                 </li>

                 <!--Banner-->
                 <li class="">
                     <a href="">
                         <i class="icon-picture"></i>
                         <span>Banner</span>
                     </a>
                 </li>

                 <!--Master Files-->
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