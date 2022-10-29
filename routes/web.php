<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('pages.home');
// });
Route::get('/', [UserController::class,'index']);
Route::get('login', [UserController::class,'login'])->name('login');
Route::post('login/custom', [UserController::class,'customLogin'])->name('login.custom');
Route::post('register', [UserController::class,'customRegistration'])->name('register');
Route::get('logout', [UserController::class, 'signOut'])->name('logout');

Route::get('products', [ProductController::class, 'index'])->name('products');
Route::get('products.store', [ProductController::class, 'store'])->name('products.store');
