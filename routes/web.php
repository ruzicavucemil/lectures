<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lectures', 'App\Http\Controllers\LectureController@index');
Route::get('/lectures/create', 'App\Http\Controllers\LectureController@create');
Route::get('/lectures/{id}', 'App\Http\Controllers\LectureController@show');
Route::post('/lectures', 'App\Http\Controllers\LectureController@store');
Route::delete('/lectures/{id}', 'App\Http\Controllers\LectureController@destroy');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
