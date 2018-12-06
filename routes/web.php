<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\CaruselController;

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

Route::get('/', 'IndexController@gallery')->name('gallery');

Route::get('/about', 'IndexController@about')->name('about');

Route::get('/contacts', 'IndexController@contacts')->name('contacts');

Route::get('/carusel', 'IndexController@carusel')->name('carusel');

Route::get('/feedback', 'IndexController@feedback')->name('feedback');

Route::get('/{slug}.html', 'CaruselController@imageBySlug')
    ->name('carusel.image')
    ->where('slug', '[\:0-9A-Za-z\-]+');