<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'home']);
Route::get('/students', [PageController::class, 'showStudents']);


Route::get('/', [PageController::class, 'home']);
Route::get('/webprog/{page?}', [PageController::class, 'showPage']);
Route::get('/students', [PageController::class, 'showStudents']);
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [PageController::class, 'registerStudent']);