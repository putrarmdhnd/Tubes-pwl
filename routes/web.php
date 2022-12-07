<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin',[App\Http\Controllers\AdminController::class,'index'])->name('admin.home')->middleware('admin');
Route::get('/perawat',[App\Http\Controllers\PerawatController::class,'index'])->name('perawat.home')->middleware('perawat');
Route::get('/dokter',[App\Http\Controllers\DokterController::class,'index'])->name('dokter.home')->middleware('dokter');


