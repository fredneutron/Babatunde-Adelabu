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

Route::get('/', 'PortfolioController@index');

Route::get('Contact', 'PortfolioController@contact');

Route::get('Projects', 'PortfolioController@projects');

Route::get('Resume', 'PortfolioController@resume');

Route::get('Blog', 'BlogController@index');

Route::get('/Blog/Post/{year}/{month}/{slug}', 'BlogController@post');