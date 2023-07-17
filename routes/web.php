<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PegawaiController;

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
    return view('home', ['title' => 'Home']);
})->name('home');

Route::get('register', [App\Http\Controllers\UserController::class, 'register'])->name('register');
Route::post('register', [App\Http\Controllers\UserController::class, 'register_action'])->name('register.action');
Route::get('login', [App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::post('login', [App\Http\Controllers\UserController::class, 'login_action'])->name('login.action');
Route::get('password', [App\Http\Controllers\UserController::class, 'password'])->name('password');
Route::post('password', [App\Http\Controllers\UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');

//Route::resource('pegawai', [App\Http\Controllers\PegawaiController::class]);