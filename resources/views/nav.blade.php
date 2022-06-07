 <!-- Navbar Section Start-->
 <nav class="navbar navbar-fixed-top">
     <div class="container-fluid">
         <div class="navbar-left">
             <div class="navbar-btn">
                 <a href="#"><img src="{{URL::to('images/v_logo.png')}}" alt="VTS" class="img-fluid logo"></a>
                 <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
             </div>
             <a href="javascript:void(0);" class="icon-menu btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>
         </div>
         <div class="navbar-right">
             <div id="navbar-menu">
                 <ul class="nav navbar-nav">
                     <li><a href="{{ url('admin/login') }}" class="icon-menu"><i class="icon-power"></i></a></li>
                 </ul>
             </div>
         </div>
     </div>
 </nav>
 <!-- Navbar Section End-->