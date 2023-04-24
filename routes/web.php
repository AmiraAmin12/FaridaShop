<?php

use App\Http\Controllers\website\AuthController;
use App\Http\Controllers\website\CartController;
use App\Http\Controllers\Website\CategoryController;
use App\Http\Controllers\Website\HomepageController;
use App\Http\Controllers\website\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomepageController::class);
// Route::get('/category/{id}', function () {
//     return view('website.category');
// });
Route::get('/category/{id}', [CategoryController::class, 'show']);
Route::get('/product/{id}', [ProductController::class ,'show']);

Route::get('/register', [AuthController::class ,'register']);
Route::post('/register', [AuthController::class ,'postRegister']);

Route::get('/login', [AuthController::class ,'login']);
Route::post('/login', [AuthController::class ,'postLogin']);

Route::get('/logout', [AuthController::class ,'logout']);


Route::get('/add-to-cart', [CartController::class, 'addToCart']);


