<?php

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


// Route:: prefix('/user')->middleware(['auth', 'admin'])->group(function () {

Route::get('/index', function () {
    // dd(1);
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

// Route::view('/chat', 'chat');


Route::get('/chat', [App\Http\Controllers\AdvisorController::class, 'chat'])->name('chat');

Route::post('/availability', [App\Http\Controllers\AdvisorController::class, 'index'])->name('availability');

Route::post('/appointment', [App\Http\Controllers\AdvisorController::class, 'appointment'])->name('appointment');

Route::get('/Available', [App\Http\Controllers\AdvisorController::class, 'Available'])->name('Available');
Route::get('/Not/Available/{id}', [App\Http\Controllers\AdvisorController::class, 'destroy'])->name('/Not/Available');

Route::get('/cancel/{id}', [App\Http\Controllers\AdvisorController::class, 'destroy'])->name('cancel');
Route::get('getMSG2', [App\Http\Controllers\AdvisorController::class, 'getMSG2']);

Route::get('showchat', [App\Http\Controllers\AdvisorController::class, 'showchat']);

Route::post('sendMSG', [App\Http\Controllers\AdvisorController::class, 'sendMSG']);

// });


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

