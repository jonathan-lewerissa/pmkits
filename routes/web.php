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

Route::get('logout', 'Auth\LoginController@logout');
Route::get('dashboard', 'DashboardController@index');
Route::resource('mahasiswa','MahasiswaController');
Route::resource('doskar','DosenkaryawanController');
Route::resource('alumni','AlumniController');
Route::resource('event','EventController');
Route::resource('renungan','RenunganController');