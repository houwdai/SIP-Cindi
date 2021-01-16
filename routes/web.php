<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;




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

Route::resource('/', UsersController::class);
Route::get('/', "App\Http\Controllers\UsersController@index")->name("index");
Route::resource('/users', "App\Http\Controllers\UsersController")->except(['create', 'show',  'destroy']);