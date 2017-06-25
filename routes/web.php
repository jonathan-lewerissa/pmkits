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

//Route::get('/home', 'HomeController@index');


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/renungan', function() {
    return view('renungan');
});

Route::get('/dashboard', function() {
    return view('dashboard');
});
    
Route::resource('/dashboard', 'DashboardController');
Route::resource('/listmahasiswa','MahasiswaController');
Route::resource('/listdosenkaryawan','DosenkaryawanController');
Route::resource('/listalumni','AlumniController');
    
