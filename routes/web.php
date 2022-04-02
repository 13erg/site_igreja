<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
//rota que leva pra home da página, será feito um agrupamento ao crescimento do site
Route::get('/', [HomeController::class, 'index'])->name('home');

 
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/gallery',[GalleryController::class,'index'] )->name('gallery.index');
Route::post('/gallery',[GalleryController::class,'store'] )->name('gallery.store');
Route::get('/gallery/{id}',[GalleryController::class,'showGallery'])->name('showGallery');
