<?php

use App\Http\Controllers\dashboard\categoryController;
use App\Http\Controllers\Dashboard\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('dashboard.index');
    
});
Route::get('/login', function () {
    return view('dashboard.login');
});

// Route::get('/categories', [categoryController ::class, 'index']);

// Route::get('/categories/show/{id}', [categoryController ::class, 'show']);

// Route::get('/categories/create', [categoryController ::class, 'create']);

// Route::post('/categories/store', [categoryController ::class, 'store']);

// Route::get('/categories/edit/{id}', [categoryController ::class, 'edit']);

// Route::post('/categories/update/{id}', [categoryController ::class, 'update']);

// Route::post('/categories/destroy/{id}', [categoryController ::class, 'destroy']);
Route:: resource('/categories',categoryController ::class);
Route:: resource('/products',ProductController ::class);
