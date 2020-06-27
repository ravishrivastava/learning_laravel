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
    return view('welcome');
});

Route::get('/hello', 'Home\HomeController@hello');

Route::get('/insert', 'Home\HomeController@insert');
Route::get('/edit', 'Home\HomeController@edit');
Route::get('/read', 'Home\HomeController@read');
Route::get('/delete', 'Home\HomeController@delete');

Route::resource('user','Home\UserController');
