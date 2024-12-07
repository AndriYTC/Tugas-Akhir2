<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('service', [PageController::class ,'service'])->name('service');
Route::get('testimnoi', [PageController::class ,'testimoni'])->name('testimoni');
Route::get('form-post', [PageController::class ,'form_post'])->name('form-post');
Route::resource('daftar-saran', PostController::class);
Route::resource('services', ServiceController::class);
Route::get('saran', [PostController::class ,'create'])->name('saran');