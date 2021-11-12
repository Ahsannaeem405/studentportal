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
Route::view('/about','about');
Route::view('/contact', 'contact');
Route::view('/privacy', 'privacy');
Route::view('/login', 'login');
route::view('/register','register');
Route::view('/advisor', 'advisors');
Route::view('/profile', 'profile');
Route::view('/booking', 'booking');
Route::view('/advisor_booking', 'Advisor_booking');

Route::view('/chat', 'chat');



