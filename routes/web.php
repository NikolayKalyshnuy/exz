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

Route::get('/', function () {
    return redirect('/instruction');
});

Route::resource('instruction', \App\Http\Controllers\InstructionController::class);
Route::get('instruction/search', '\App\Http\Controllers\InstructionController@search');
Route::resource('login', \App\Http\Controllers\UserController::class);
