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
    return view('home');
});

Route::get('/data-tables', function () {
	return view('datatable');
});

Route::get('/pertanyaan','PertanyaanController@index');
Route::post('/pertanyaan','PertanyaanController@store');
Route::get('/pertanyaan/{id}/edit','PertanyaanController@edit');
Route::get('/pertanyaan/create','PertanyaanController@create');
Route::put('/pertanyaan/{id}','PertanyaanController@update');
Route::delete('/pertanyaan/{id}','PertanyaanController@destroy');

Route::get('/jawaban/{pertanyaan_id}','JawabanController@index');
Route::post('/jawaban/{pertanyaan_id}','JawabanController@store');
Route::get('/jawaban/{id}/edit','JawabanController@edit');
Route::put('/jawaban/{id}','JawabanController@update');
Route::delete('/jawaban/{id}','JawabanController@destroy');
