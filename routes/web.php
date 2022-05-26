<?php

use App\Http\Controllers\PagesController;
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

// auth
Auth::routes();
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// routes
Route::get('/', [PagesController::class, 'home']);
Route::get('sluzby', [PagesController::class, 'services']);
Route::get('s', [PagesController::class, 'service']);
Route::get('kontakt', [PagesController::class, 'contact']);