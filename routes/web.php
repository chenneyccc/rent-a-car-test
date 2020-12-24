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
Route::get('/about', function () {
    return view('about');
});
Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});





Auth::routes();

Route::resource('autos', \App\Http\Controllers\AutoController::class );
Route::resource('assortiment', \App\Http\Controllers\AssortimentController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
