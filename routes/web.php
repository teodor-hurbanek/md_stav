<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ImageController;
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
Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
    'email' => false,
    'password' => false,
]);
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// routes
Route::get('/', [PagesController::class, 'home']);
Route::get('services', [ServiceController::class, 'index']);
Route::get('contact', [PagesController::class, 'contact']);

// services
Route::resource('services', ServiceController::class)->scoped([
    'service' => 'slug',
]);

// images
Route::resource('images', ImageController::class)->only([
    'store', 'update', 'destroy'
]);