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
    return view('layouts.depan');
});

Route::get('/Proyek/create', 'ProyekController@create'); // menampilkan halaman form
Route::post('/Proyek', 'ProyekController@store'); // menyimpan data
Route::get('/Proyek', 'ProyekController@index'); // menampilkan semua
Route::get('/Proyek/{id}', 'ProyekController@show'); // menampilkan detail Proyek dengan id 
Route::get('/Proyek/{id}/edit', 'ProyekController@edit'); // menampilkan form untuk edit Proyek
Route::put('/Proyek/{id}', 'ProyekController@update'); // menyimpan perubahan dari form edit
Route::delete('/Proyek/{id}', 'ProyekController@destroy'); // menghapus data dengan id