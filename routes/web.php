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


//FrontEnd
Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/trang-chu', 'App\Http\Controllers\HomeController@index');
Route::get('/quan-tri', 'App\Http\Controllers\AdminController@index');
Route::get('/dashboard', 'App\Http\Controllers\Admin\Dashboard\DashboardController@index');


//BackEnd