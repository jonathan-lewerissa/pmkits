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

Route::get('/renungan', function() {
    return view('renungan');
});

Route::get('/activity', function() {
    return view('activity');
});

Route::get('logout', 'Auth\LoginController@logout');
Route::get('dashboard', 'DashboardController@index');
Route::resource('mahasiswa','MahasiswaController');
Route::resource('doskar','DosenkaryawanController');
Route::resource('alumni','AlumniController');
Route::resource('event','EventController');
Route::resource('renungan','RenunganController');

Route::any('pengurus/index', ['as'=>'pengurus', 'uses'=>'PengurusController@index']);
Route::any('pengurus/ksb', ['as'=>'ksb', 'uses'=>'PengurusController@ksb']);
Route::any('pengurus/medfo', ['as'=>'medfo', 'uses'=>'PengurusController@medfo']);
Route::any('pengurus/dpk', ['as'=>'dpk', 'uses'=>'PengurusController@dpk']);
Route::any('pengurus/pemuridan', ['as'=>'pemuridan', 'uses'=>'PengurusController@pemuridan']);
Route::any('pengurus/persekutuan', ['as'=>'persekutuan', 'uses'=>'PengurusController@persekutuan']);
Route::any('pengurus/pkmbk', ['as'=>'pkmbk', 'uses'=>'PengurusController@pkmbk']);
Route::any('pengurus/napas', ['as'=>'napas', 'uses'=>'PengurusController@napas']);

Route::resource('pj','PJController');
Route::resource('pd','PDController');