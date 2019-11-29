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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MylatController@index');
Route::get('/pengurus', 'MylatController@pengurus');
Route::get('/contact', 'MylatController@contact');
Route::get('/absen', 'MylatController@absen');
Route::get('/usersList', 'userList@datatables');

Auth::routes();

Route::get('/admin', 'HomeController@index');
Route::post('/admin/tambah', 'HomeController@tambah');
Route::get('/admin/{id}/edit', 'HomeController@edit');
Route::post('/admin/{id}/update', 'HomeController@update');
Route::get('/admin/{id}/hapus', 'HomeController@hapus');

Route::post('/admin/doc', 'DocController@upload');

Route::get('/admin/dokumen', 'HomeController@doc');
Route::post('/admin/images', 'DocController@images');
Route::get('/admin/lookimages', 'HomeController@look');

Route::get('/admin/dokumen/{id}', 'HomeController@download');
Route::get('/admin/lookimages/{id}', 'HomeController@dimg');


Route::get('/admin/dokumen/{id}/hapus', 'HomeController@docdel');