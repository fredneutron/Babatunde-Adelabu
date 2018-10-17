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

Route::get('/Resume', 'PortfolioController@resume');

Route::get('/Projects', 'PortfolioController@projects');

Route::get('/Contact', 'PortfolioController@contact');