<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('welcome');

Auth::routes();
Route::resource('/address', App\Http\Controllers\AddressController::class);
Route::resource('/station', App\Http\Controllers\StationController::class);
Route::resource('/album', App\Http\Controllers\AlbumController::class);
Route::resource('/photo', App\Http\Controllers\PhotoController::class);
Route::resource('/settings', App\Http\Controllers\SettingController::class);
Route::resource('/about', App\Http\Controllers\AboutController::class);
Route::resource('/slide', App\Http\Controllers\SlideController::class);
Route::resource('/product', App\Http\Controllers\ProductController::class);
Route::resource('/order', App\Http\Controllers\OrderController::class);
Route::resource('/message', App\Http\Controllers\MessageController::class);


Route::resource('/front/station', App\Http\Controllers\FrontStationController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/w_admin', [App\Http\Controllers\DashboardController::class, 'index'])->name('admin');
Auth::routes(['register' => false]);


Route::get('/gallery', [App\Http\Controllers\FrontPhotoController::class, 'index'])->name('gallery');


Route::get('/storagelink', function () {
    Artisan::call('storage:link');
});
