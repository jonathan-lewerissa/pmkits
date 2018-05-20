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

Route::resource('/', 'HomeController');
Route::resource('welcome', 'HomeController');

Route::get('/about', function() {
    return view('about');
});

Route::get('/news', function() {
    return view('news');
});

// Route::get('/renungan', function() {
//     return view('renungan');
// });


Route::any('search', 'DashboardController@search')->name('search');
Route::any('change_password', 'DashboardController@change_password')->name('change_password');

Route::resource('mhs', 'MahasiswaController');

Route::get('logout', 'Auth\LoginController@logout');
Route::resource('renungan', 'RenunganController');

Route::resource('admin/mahasiswa','MahasiswaController');
Route::resource('admin/doskar','DosenkaryawanController');
Route::resource('admin/alumni','AlumniController');
Route::resource('admin/event','EventController');
Route::resource('admin/renungan','RenunganController');

Route::any('admin/index', ['as'=>'pengurus', 'uses'=>'PengurusController@index']);
Route::any('admin/ksb', ['as'=>'ksb', 'uses'=>'PengurusController@ksb']);
Route::any('admin/medfo', ['as'=>'medfo', 'uses'=>'PengurusController@medfo']);
Route::any('admin/dpk', ['as'=>'dpk', 'uses'=>'PengurusController@dpk']);
Route::any('admin/pemuridan', ['as'=>'pemuridan', 'uses'=>'PengurusController@pemuridan']);
Route::any('admin/persekutuan', ['as'=>'persekutuan', 'uses'=>'PengurusController@persekutuan']);
Route::any('admin/pkmbk', ['as'=>'pkmbk', 'uses'=>'PengurusController@pkmbk']);
Route::any('admin/napas', ['as'=>'napas', 'uses'=>'PengurusController@napas']);

Route::resource('admin/pj','PJController');
Route::resource('admin/pd','PDController');

Auth::routes();


Route::get('dashboard', 'DashboardController@index');
Route::get('/home', 'HomeController@index')->name('home');
