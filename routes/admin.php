<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PageController;
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

Route::get('/dashboard', [PageController::class, 'index'])->name('dashboard');

//category
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/category/add', [CategoryController::class, 'add'])->name('add.category');
