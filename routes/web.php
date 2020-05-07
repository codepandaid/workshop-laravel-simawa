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

//Route::get('/form-1','InfoMahasiswaController@createForm');


Route::get('/table-mahasiswa', function () {
    return view('table-mahasiswa');
});


Auth::routes();

Route::get('/home', 'AdminController@index')->name('home');

//route for crud info mahasiswa
Route::post('/info-mahasiswa/post', 'InfoMahasiswaController@addInfoMahasiswa');
Route::post('/info-mahasiswa/edit/{id}', 'InfoMahasiswaController@editInfoMahasiswa');
Route::get('/info-mahasiswa/{id}', 'InfoMahasiswaController@viewInfoMahasiswa');
Route::get('/info-mahasiswa/delete/{id}', 'InfoMahasiswaController@deleteInfoMahasiswa');

//route for crud info keluarga
Route::post('/info-keluarga/post', 'InfoKeluargaController@addInfoKeluarga');
Route::post('/info-keluarga/edit/{id}', 'InfoKeluargaController@editInfoKeluarga');
Route::get('/info-keluarga/{id}', 'InfoKeluargaController@viewInfoKeluarga');
Route::get('/info-keluarga/delete/{id}', 'InfoKeluargaController@deleteInfoKeluarga');

Route::get('/edit-form-1/{id}', 'AdminController@editInfoMahasiswa');
Route::post('/edit-form-1/{id}', 'InfoMahasiswaController@editInfoMahasiswa');

Route::get('/edit-form-2/{id}', 'AdminController@editInfoKeluarga');
Route::post('/edit-form-2/{id}', 'InfoKeluargaController@editInfoKeluarga');

Route::get('/form-1','AdminController@addInfoMahasiswa');
Route::post('/form-1','InfoMahasiswaController@addInfoMahasiswa');