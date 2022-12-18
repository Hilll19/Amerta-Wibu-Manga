<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminAuthController;

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
Route::get('/', [MainController::class, 'dashboard']);
Route::get('/latest', [MainController::class, 'latest']);
Route::get('/popular', [MainController::class, 'popular']);
Route::get('/detailread', [MainController::class, 'detail']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/genre', function () {
    return view('#');
});
Route::get('/bookmark', function () {
    return view('bookmark');
});

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::view('login', 'login');
Route::post('login', [AuthController::class, 'processLogin'])->name('process-login'); 

Route::view('register', 'register');
Route::post('register', [AuthController::class, 'processRegister'])->name('process-register'); 

Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
/*
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::view('admin/login', 'admin/login');
Route::post('admin/login', [AdminAuthController::class, 'processLogin'])->name('admin-login'); 