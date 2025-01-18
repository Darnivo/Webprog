<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class, 'showProducts']);


Route::get('/home', [ProductController::class, 'showProducts']);


Route::get('/main', function () {
    return view('main');
});


Route::get('/login', [AccountController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AccountController::class, 'login']);

Route::post('/logout', [AccountController::class, 'logout'])->name('logout');


Route::get('/register', [AccountController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AccountController::class, 'register']);

Route::get('/register_success', function () {
    return view('register_success');
})->name('register_success');

Route::get('/topup', [AccountController::class, 'showTopUp'])->name('topup');
Route::post('/topup', [AccountController::class, 'topUp']);

Route::get('/category/{id}', [ProductController::class, 'showProductsOfCategory']);


Route::get('/redeem', [AccountController::class, 'showRedemptionForm'])->name('redeem');
Route::post('/redeem', [AccountController::class, 'redeemPoints']);


Route::get('/product/{id}', [ProductController::class, 'showProduct'])->name('product');
Route::post('/product/{id}/purchase', [ProductController::class, 'purchaseProduct'])->name('product.purchase');

Route::middleware(['admin'])->group(function () {
    Route::get('/upload', [ProductController::class, 'showUploadForm'])->name('upload.form');
    Route::post('/upload', [ProductController::class, 'uploadProduct'])->name('upload.submit');
});

Route::get('/search', [ProductController::class, 'searchProduct'])->name('search');