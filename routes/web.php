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


Route::get('/', function () {
    return view('welcome');
});

Route::get('tibiaMcy', 'PageController@index')->name('page.tibiaMcy');
Route::get('gamersesion', 'PageController@gamersesion')->name('page.gamersesion');
Route::post('pagegamersave', 'PageController@store')->name('page.gamersave');

Route::get('admin', 'AdminController@index')->name('admin.index');
Route::get('gamers', 'AdminController@gamers')->name('admin.gamers');
Route::post('gamersave', 'AdminController@store')->name('admin.gamersave');
Route::get('gamershow/{id}', 'AdminController@show')->name('admin.gamershow');
Route::get('gamersedit/{id}', 'AdminController@edit')->name('admin.gamersedit');
Route::put('gamersupdate/{id}', 'AdminController@update')->name('admin.gamersupdate');
Route::delete('gamersdelete/{id}', 'AdminController@destroy')->name('admin.gamersdelete');

Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');
