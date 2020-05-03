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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/datamahasiswa', function () {
    return view('data-mahasiswa');
});
Route::get('/form-1', function () {
    return view('form-1');
});
Route::get('/form-2', function () {
    return view('form-2');
});

Auth::routes();

Route::get('/home', 'AdminController@index')->name('home');
Route::post('/info-mahasiswa/post', 'InfoMahasiswaController@addInfoMahasiswa');
Route::get('/info-mahasiswa/{id}', 'InfoMahasiswaController@viewInfoMahasiswa');

Route::get('/edit-form-1/{id}', 'AdminController@editInfoMahasiswa');
Route::post('/edit-form-1/{id}', 'InfoMahasiswaController@editInfoMahasiswa');

Route::get('/edit-form-2/{id}', 'AdminController@editInfoKeluarga');
Route::post('/edit-form-2/{id}', 'InfoKeluargaController@editInfoKeluarga');
