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



Route::get('/api', 'HolidaysController@index')->name('holidays');
Route::get('/api/year', 'HolidaysController@year')->name('year');
Route::get('/api/uf/{uf}', 'HolidaysController@uf')->name('uf');

