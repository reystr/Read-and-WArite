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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search', 'SearchController@index');
Route::get('/stationery', 'StationeryController@index');
Route::get('details/{id}', 'StationeryDetailsController@index');
Route::post('details/{id}', 'StationeryDetailsController@order');
Route::get('/checkout', 'StationeryDetailsController@checkout');
Route::delete('/checkout/{id}', 'StationeryDetailsController@delete');
Route::get('/confirm', 'StationeryDetailsController@confirm');
Route::get('/history','HistoryController@index');
//Route::get('/threads', 'ThreadController@index');
