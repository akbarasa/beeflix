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


Route::get('/', 'MainController@index');
Route::get('/viewDetail/{id}','MainController@viewDetail');
Route::get('/viewAllFilm','MainController@viewAllFilm');
Route::get('/viewCategory/{id}','MainController@viewCategory');