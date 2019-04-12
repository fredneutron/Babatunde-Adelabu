<?php

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

Route::get('/', 'PortfolioController@index')->name('Home');

Route::get('Contact', 'PortfolioController@contact')->name('Contact');

Route::get('Projects', 'PortfolioController@projects')->name('Projects');

Route::get('Resume', 'PortfolioController@resume')->name('Resume');

Route::get('Blog', 'BlogController@index')->name('Blog');

Route::get('/Blog/Post/{year}/{month}/{slug}', 'BlogController@post')->name('Post');
