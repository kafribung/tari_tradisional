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
    return redirect('/suku');
});

Route::group(['middleware' => 'admin'], function () {
    Route::resource('/suku', 'DanceController')->except(['index', 'show']);
});

Route::resource('/suku', 'DanceController')->only(['index', 'show']);
Route::get('/about', 'DanceController@about');

// Tanpa Login
Route::get('/suku/create/tanpa/login', 'DanceController@create');
Route::post('/suku', 'DanceController@store');


Auth::routes();
