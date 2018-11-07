<?php

use App\Http\Controllers\IndexController;

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
    return view('welcome');
});

Route::get('/about', 'IndexController@about')->name('about');

Route::get('/contacts', 'IndexController@contacts')->name('contacts');

Route::get('/gallery', 'IndexController@gallery')->name('gallery');

Route::get('/feedback', 'IndexController@feedback')->name('feedback');