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
// Route::resource('item','Itemscontroller');
Route::get('/item','Itemscontroller@create');
Route::post('/item','Itemscontroller@store');
Route::get('/index','Itemscontroller@index');
Route::get('/store/{id}','Itemscontroller@show');

Route::resource('item','Itemscontroller');

