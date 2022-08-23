<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminusersController;
use App\Http\Controllers\SitesettingsController;

//Website
Route::get('/', [HomeController::class,'index'])->name('home.index');
Route::get('/about', [AboutController::class,'index'])->name('about.index');
Route::get('/services', [ServicesController::class,'index'])->name('services.index');
Route::get('/portfolio', [ProductController::class,'index'])->name('products.index');
Route::get('/blogs', [ResourcesController::class,'blogs'])->name('resources.blogs');
Route::get('/videos', [ResourcesController::class,'videos'])->name('resources.videos');
Route::get('/contact', [ContactController::class,'index'])->name('contact.index');

Route::prefix('admin')->group(function(){
Route::get('/', [AdminusersController::class,'login'])->name('adminusers.login')->middleware('guest');
Route::get('/login', [AdminusersController::class,'login'])->name('adminusers.login')->middleware('guest');
Route::post('/store', [AdminusersController::class,'store'])->name('adminusers.store');
Route::get('/register', [AdminusersController::class,'register'])->name('adminusers.register')->middleware('guest');
Route::post('/register/store', [AdminusersController::class,'register_store'])->name('adminusers.register_store');
Route::get('/logout', [AdminusersController::class,'logout'])->name('adminusers.logout');
Route::any('/dashboard', [AdminusersController::class,'dashboard'])->name('adminusers.dashboard')->middleware('auth');
Route::any('/profile', [AdminusersController::class,'profile'])->name('adminusers.profile')->middleware('auth');
Route::any('/forgot', [AdminusersController::class,'forgot'])->name('adminusers.forgot')->middleware('guest');

//Sitesettings
Route::get('/sitesettings',[SitesettingsController::class,'index'])->name('sitesettings.index')->middleware('auth');
Route::post('/sitesettings/update/{id}', [SitesettingsController::class,'update'])->name('sitesettings.update')->middleware('auth');

//Our Experts
Route::get('/resources/experts/index', [ResourcesController::class,'experts_index'])->name('resources.experts_index')->middleware('auth');
Route::get('/resources/experts/add', [ResourcesController::class,'experts_add'])->name('resources.experts_add')->middleware('auth');
Route::post('/resources/experts/store', [ResourcesController::class,'experts_store'])->name('resources.experts_store')->middleware('auth');
Route::get('/resources/experts/edit/{id}', [ResourcesController::class,'experts_edit'])->name('resources.experts_edit')->middleware('auth');
Route::post('/resources/experts/update/{id}', [ResourcesController::class,'experts_update'])->name('resources.experts_update')->middleware('auth');
Route::get('/resources/experts/delete/{id}', [ResourcesController::class,'experts_delete'])->name('resources.experts_delete')->middleware('auth');

//Our Clients
Route::get('/about/index', [AboutController::class,'admin_index'])->name('about.admin_index')->middleware('auth');
Route::get('/about/add', [AboutController::class,'admin_add'])->name('about.admin_add')->middleware('auth');
Route::post('/about/store', [AboutController::class,'admin_store'])->name('about.admin_store')->middleware('auth');
Route::get('/about/edit/{id}', [AboutController::class,'admin_edit'])->name('about.admin_edit')->middleware('auth');
Route::post('/about/update/{id}', [AboutController::class,'admin_update'])->name('about.admin_update')->middleware('auth');
Route::get('/about/delete/{id}', [AboutController::class,'admin_delete'])->name('about.admin_delete')->middleware('auth');

//Our Services
Route::get('/services/index', [ServicesController::class,'admin_index'])->name('services.admin_index')->middleware('auth');
Route::get('/services/add', [ServicesController::class,'admin_add'])->name('services.admin_add')->middleware('auth');
Route::post('/services/store', [ServicesController::class,'admin_store'])->name('services.admin_store')->middleware('auth');
Route::get('/services/edit/{id}', [ServicesController::class,'admin_edit'])->name('services.admin_edit')->middleware('auth');
Route::post('/services/update/{id}', [ServicesController::class,'admin_update'])->name('services.admin_update')->middleware('auth');
Route::get('/services/delete/{id}', [ServicesController::class,'admin_delete'])->name('services.admin_delete')->middleware('auth');

//Our Blogs
Route::get('/resources/blogs/index', [ResourcesController::class,'blogs_index'])->name('resources.blogs_index')->middleware('auth');
Route::get('/resources/blogs/add', [ResourcesController::class,'blogs_add'])->name('resources.blogs_add')->middleware('auth');
Route::post('/resources/blogs/store', [ResourcesController::class,'blogs_store'])->name('resources.blogs_store')->middleware('auth');
Route::get('/resources/blogs/edit/{id}', [ResourcesController::class,'blogs_edit'])->name('resources.blogs_edit')->middleware('auth');
Route::post('/resources/blogs/update/{id}', [ResourcesController::class,'blogs_update'])->name('resources.blogs_update')->middleware('auth');
Route::get('/resources/blogs/delete/{id}', [ResourcesController::class,'blogs_delete'])->name('resources.blogs_delete')->middleware('auth');

//Our Videos
Route::get('/resources/videos/index', [ResourcesController::class,'videos_index'])->name('resources.videos_index')->middleware('auth');
Route::get('/resources/videos/add', [ResourcesController::class,'videos_add'])->name('resources.videos_add')->middleware('auth');
Route::post('/resources/videos/store', [ResourcesController::class,'videos_store'])->name('resources.videos_store')->middleware('auth');
Route::get('/resources/videos/edit/{id}', [ResourcesController::class,'videos_edit'])->name('resources.videos_edit')->middleware('auth');
Route::post('/resources/videos/update/{id}', [ResourcesController::class,'videos_update'])->name('resources.videos_update')->middleware('auth');
Route::get('/resources/videos/delete/{id}', [ResourcesController::class,'videos_delete'])->name('resources.videos_delete')->middleware('auth');

//Our Projects
Route::get('/products/index', [ProductController::class,'admin_index'])->name('products.admin_index')->middleware('auth');
Route::get('/products/add', [ProductController::class,'admin_add'])->name('products.admin_add')->middleware('auth');
Route::post('/products/store', [ProductController::class,'admin_store'])->name('products.admin_store')->middleware('auth');
Route::get('/products/edit/{id}', [ProductController::class,'admin_edit'])->name('products.admin_edit')->middleware('auth');
Route::post('/products/update/{id}', [ProductController::class,'admin_update'])->name('products.admin_update')->middleware('auth');
Route::get('/products/delete/{id}', [ProductController::class,'admin_delete'])->name('products.admin_delete')->middleware('auth');

//Contact Enquiries
Route::get('/contact/index', [ContactController::class,'admin_index'])->name('contact.admin_index')->middleware('auth');
Route::get('/contact/delete/{id}', [ContactController::class,'admin_delete'])->name('contact.admin_delete')->middleware('auth');

//Sevice Categories
Route::get('/resources/index', [ResourcesController::class,'admin_index'])->name('resources.admin_index')->middleware('auth');
Route::get('/resources/add', [ResourcesController::class,'admin_add'])->name('resources.admin_add')->middleware('auth');
Route::post('/resources/store', [ResourcesController::class,'admin_store'])->name('resources.admin_store')->middleware('auth');
Route::get('/resources/edit/{id}', [ResourcesController::class,'admin_edit'])->name('resources.admin_edit')->middleware('auth');
Route::post('/resources/update/{id}', [ResourcesController::class,'admin_update'])->name('resources.admin_update')->middleware('auth');
Route::get('/resources/delete/{id}', [ResourcesController::class,'admin_delete'])->name('resources.admin_delete')->middleware('auth');

});