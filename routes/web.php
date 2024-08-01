<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

//Index

Route::get('/', function () {
    return view('welcome');
});
Route::get('IndexAdmin', function () {
    return view('Admin/Index');
});
Route::get('IndexEditor', function () {
    return view('Editor/Index');
});
Route::get('IndexUser', function () {
    return view('User/Index');
});


//Product

Route::get('IndexProduct', [App\Http\Controllers\ProductController::class, 'Index'])->name('IndexProduct');
Route::put('EditProduct', [App\Http\Controllers\ProductController::class, 'Edit'])->name('EditProduct');
Route::delete('DeleteProduct', [App\Http\Controllers\ProductController::class, 'Delete'])->name('DeleteProduct');


//Post

Route::get('IndexPost', [App\Http\Controllers\PostController::class, 'Index'])->name('IndexPost');
Route::put('EditPost', [App\Http\Controllers\PostController::class, 'Edit'])->name('EditPost');
Route::delete('DeletePost', [App\Http\Controllers\PostController::class, 'Delete'])->name('DeletePost');

//Category

Route::get('IndexCategory', [App\Http\Controllers\CategoryController::class, 'Index'])->name('IndexCategory');
Route::put('EditCategory', [App\Http\Controllers\CategoryController::class, 'Edit'])->name('EditCategory');
Route::delete('DeleteCategory', [App\Http\Controllers\CategoryController::class, 'Delete'])->name('DeleteCategory');
