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


Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('contact',[App\Http\Controllers\ContactController::class,'index']);
Route::get('contact',[App\Http\Controllers\ContactController::class,'create']);
Route::post('contact',[App\Http\Controllers\ContactController::class,'store']);


Route::get('/gallery', function () {
    return view('gallery');
});