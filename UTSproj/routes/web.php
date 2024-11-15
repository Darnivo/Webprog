<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'showHomePage']);
Route::get('/post/{id}', [HomeController::class, 'showPostDetail']);
Route::get('/category/{id}', [HomeController::class, 'showPostsOfCategory']);
Route::get('/about', [HomeController::class, 'showAbout']);
Route::get('/search', [HomeController::class, 'search'])->name('posts.search');