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

Route::get('/resources/index', [ResourcesController::class,'index']);
Route::get('/resources/add', [ResourcesController::class,'add']);
Route::post('/resources/store', [ResourcesController::class,'store']);

Route::any('/resources/experts/index', [ResourcesController::class,'experts_index']);
Route::any('/resources/experts/add', [ResourcesController::class,'experts_add']);
Route::any('/resources/experts/edit', [ResourcesController::class,'experts_edit']);

Route::get('/resources/index', [ResourcesController::class,'index']);

Route::any('/sitesettings',[SitesettingsController::class,'index']);
});