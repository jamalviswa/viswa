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


Route::get('/', [HomeController::class,'index']);
Route::get('/home', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'index']);
Route::get('/services', [ServicesController::class,'index']);
Route::get('/portfolio', [ProductController::class,'index']);
Route::get('/blogs', [ResourcesController::class,'blogs']);
Route::get('/videos', [ResourcesController::class,'videos']);
Route::get('/contact', [ContactController::class,'index']);

Route::prefix('admin')->group(function(){
Route::any('/', [AdminusersController::class,'login']);
Route::any('/login', [AdminusersController::class,'login']);
Route::any('/dashboard', [AdminusersController::class,'dashboard']);
Route::any('/profile', [AdminusersController::class,'profile']);
Route::any('/forgot', [AdminusersController::class,'forgot']);

//Sitesettings
Route::any('/sitesettings',[SitesettingsController::class,'index']);

//Our Experts
Route::get('/resources/experts/index', [ResourcesController::class,'experts_index'])->name('resources.experts_index');
Route::get('/resources/experts/add', [ResourcesController::class,'experts_add'])->name('resources.experts_add');
Route::post('/resources/experts/store', [ResourcesController::class,'experts_store'])->name('resources.experts_store');
Route::any('/resources/experts/edit', [ResourcesController::class,'experts_edit']);

//Our Clients
Route::get('/about/index', [AboutController::class,'admin_index'])->name('about.admin_index');
Route::get('/about/add', [AboutController::class,'admin_add'])->name('about.admin_add');
Route::post('/about/store', [AboutController::class,'admin_store'])->name('about.admin_store');
Route::any('/about/edit', [AboutController::class,'admin_edit']);

//Our Blogs
Route::get('/resources/blogs/index', [ResourcesController::class,'blogs_index']);
Route::any('/resources/blogs/add', [ResourcesController::class,'blogs_add']);
Route::any('/resources/blogs/edit', [ResourcesController::class,'blogs_edit']);

//Sevice Categories
Route::get('/resources/index', [ResourcesController::class,'admin_index']);
Route::get('/resources/add', [ResourcesController::class,'admin_add']);
Route::post('/resources/store', [ResourcesController::class,'admin_store']);

//Our Services
Route::get('/services/index', [ServicesController::class,'admin_index']);
Route::get('/services/add', [ServicesController::class,'admin_add']);
Route::post('/services/store', [ServicesController::class,'admin_store']);

//Our Videos
Route::get('/resources/videos/index', [ResourcesController::class,'videos_index'])->name('resources.videos_index');
Route::get('/resources/videos/add', [ResourcesController::class,'videos_add'])->name('resources.videos_add');
Route::post('/resources/videos/store', [ResourcesController::class,'videos_store'])->name('resources.videos_store');

//Our Projects
Route::get('/products/index', [ProductController::class,'admin_index']);
Route::get('/products/add', [ProductController::class,'admin_add']);
Route::post('/products/store', [ProductController::class,'admin_store']);

//Contact Enquiries
Route::get('/contact/index', [ContactController::class,'admin_index']);



});