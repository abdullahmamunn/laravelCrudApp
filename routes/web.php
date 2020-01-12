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

Route::get('/','StudentController@index')->name('home');
Route::get('create','StudentController@create')->name('create');
Route::post('store','StudentController@StoreData')->name('store');
Route::get('edit/id/{id}','StudentController@EditData')->name('edit');
Route::post('update{id}','StudentController@UpdateData')->name('update');
Route::get('delete{id}','StudentController@DeleteData')->name('delete');
Route::get('show{id}','StudentController@ShowData')->name('show');

