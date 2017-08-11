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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/activity', function() {
    return view('activity');
});

Route::get('logout', 'Auth\LoginController@logout');
Route::get('dashboard', 'DashboardController@index');
Route::resource('admin/mahasiswa','MahasiswaController');
Route::resource('doskar','DosenkaryawanController');
Route::resource('alumni','AlumniController');
Route::resource('event','EventController');
Route::resource('renungan','RenunganController');

Route::any('admin/index', ['as'=>'pengurus', 'uses'=>'PengurusController@index']);
Route::any('admin/ksb', ['as'=>'ksb', 'uses'=>'PengurusController@ksb']);
Route::any('admin/medfo', ['as'=>'medfo', 'uses'=>'PengurusController@medfo']);
Route::any('admin/dpk', ['as'=>'dpk', 'uses'=>'PengurusController@dpk']);
Route::any('admin/pemuridan', ['as'=>'pemuridan', 'uses'=>'PengurusController@pemuridan']);
Route::any('admin/persekutuan', ['as'=>'persekutuan', 'uses'=>'PengurusController@persekutuan']);
Route::any('admin/pkmbk', ['as'=>'pkmbk', 'uses'=>'PengurusController@pkmbk']);
Route::any('admin/napas', ['as'=>'napas', 'uses'=>'PengurusController@napas']);

Route::resource('pj','PJController');
Route::resource('pd','PDController');