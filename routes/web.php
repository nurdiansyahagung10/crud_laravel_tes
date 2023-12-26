<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\categorycontroller;
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

Route::get('/', function () {
    return view('welcome');
});


route::get('/category', [categorycontroller::class, 'index'])->name('category.index');
route::get('/category/create', [categorycontroller::class, 'create'])->name('category.create');
route::post('/category/store', [categorycontroller::class, 'store'])->name('category.store');
route::post('/category/sort/{data}', [categorycontroller::class, 'sortbycategory'])->name('category.sort');
route::delete('/category/{category}/destroy', [categorycontroller::class, 'destroy'])->name('category.destroy');
Route::resource('/data', DataController::class);