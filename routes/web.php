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

Route::get('/','ControllerBooks@index')->name('book.index');
Route::get('/create','ControllerBooks@create')->name('book.create');
Route::post('/','ControllerBooks@store')->name('book.store');
Route::get('/{id}edit','ControllerBooks@edit')->name('book.edit');
Route::post('/{id}','ControllerBooks@update')->name('book.update');
