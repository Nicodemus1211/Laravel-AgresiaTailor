<?php

use App\Http\Controllers\AdminCollection;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminGallery;
use App\Http\Controllers\ColectionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', [HomeController::class,'home']);
Route::get('/collection', [ColectionController::class,'collection']);
Route::get('/gallery', [GalleryController::class,'gallery']);
Route::get('/contact',[ContactController::class,'contact']);

Route::get('/AdminSb',[AdminController::class,'index']);
Route::get('/AdminCollection',[AdminCollection::class,'collect']);
Route::get('/AdminGallery',[AdminGallery::class,'Admingallery']);
