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
// ของจารสา
// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//ของจารเดียร์

//Start-Promote
Route::view('/', 'promotepage.home')->name('home');
Route::view('/about', 'promotepage.about')->name('about');
Route::view('/shop', 'promotepage.shop')->name('shop');
Route::view('/contact', 'promotepage.contact')->name('contact');
Route::view('/info', 'promotepage.info')->name('info');


//End-Promote




//Start-Admin
Route::view('/admin/home', 'adminpage.adminhome')->name('adminhome');



//End-Admin
