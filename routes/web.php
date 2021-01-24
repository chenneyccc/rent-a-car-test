<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrintController;

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
//Route::get('/about', function () {
//    return view('about');
//});
Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});





Auth::routes();

Route::resource('reservering',\App\Http\Controllers\ReserveringController::class);
Route::resource('autos', \App\Http\Controllers\AutoController::class );
Route::resource('assortiment', \App\Http\Controllers\AssortimentController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
Route::get('/edit/user/', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
Route::post('/edit/user/', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');


Route::get('/gereserveerd', [App\Http\Controllers\Admin\Gereserveerd::class, 'index'])->name('gereserveerd');

Route::prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'App\Http\Controllers\Admin\UsersController', ['except' => ['show', 'create', 'store']]);


});
