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

//Route::get('/',[TodolistController::class, 'index'])->name('index');
Route::get('/', 'App\Http\Controllers\todoListController@index')->name('index');
//Route::post('/', [TodolistController::class, 'store'])->name('store');
Route::post('/', 'App\Http\Controllers\todoListController@store')->name('store');
//Route::delete('/{todolist:id}', [TodolistController::class, 'destroy'])->name('destroy');
Route::delete('/{todolist:id}', 'App\Http\Controllers\todoListController@destroy')->name('destroy');