<?php

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

//Route::get('/',[\App\Http\Controllers\BlogController::class,'index'])->name('index');
//Route::get('/create',[\App\Http\Controllers\BlogController::class,'create'])->name('create');
//Route::get('/show/{blog}',[\App\Http\Controllers\BlogController::class,'show']);

Route::view('/','layout');
Route::view('/create','layout');
Route::view('/show/{blog}','layout');

Route::get('/blog/{id}',[\App\Http\Controllers\BlogController::class,'show']);
Route::get('/blogs',[\App\Http\Controllers\BlogController::class,'index']);
Route::post('/store',[\App\Http\Controllers\BlogController::class,'store']);



