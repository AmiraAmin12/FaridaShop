<?php

use App\Http\Controllers\Website\CategoryController;
use App\Http\Controllers\Website\HomepageController;
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
Route::get('/product', function () {
    return view('website.product');
});

