 <!-- Navbar Section Start-->
 <?php $sitesettings = App\Models\Sitesetting::first(); ?>
 <nav class="navbar navbar-fixed-top">
     <div class="container-fluid">
         <div class="navbar-left">
             <div class="navbar-btn">
                 <a href="{{ route('home.index') }}" target="_blank"><img src="{{URL::to('images/sitesettings/'.$sitesettings['logo'])}}" alt="VTS" class="img-fluid logo"></a>
                 <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
             </div>
             <a href="javascript:void(0);" class="icon-menu btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>
         </div>
         <div class="navbar-right">
             <div id="navbar-menu">
                 <ul class="nav navbar-nav">
                     <li><a href="{{ route('adminusers.logout') }}" class="icon-menu"><i class="icon-power"></i></a></li>
                 </ul>
             </div>
         </div>
     </div>
 </nav>
 <!-- Navbar Section End-->