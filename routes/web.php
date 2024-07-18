<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Test1Controller;
use App\Http\Controllers\Test2Controller;
use App\Http\Controllers\Test3Controller;
use App\Http\Controllers\ProductController;

Route::get('/home',[Test3Controller::class,'test3'])->name('home');
Route::get('/add',[TestController::class, 'test'])->name('add');
Route::get('/update',[Test1Controller::class,'test1'])->name('update');
Route::get('/view',[Test2Controller::class,'test2'])->name('view');

Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::post('/products',[ProductController::class,'store'])->name('products.store');
Route::get('/products',[ProductController::class,'index'])->name('products.index');