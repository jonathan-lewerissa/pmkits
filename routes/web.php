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
    return view('welcome');
});

Auth::routes();

//<<<<<<< HEAD
Route::get('/home', 'HomeController@index');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/dashboard', function() {
    return view('dashboard');
});

Route::get('/listmahasiswa', function() {
    return view('mahasiswa.index');
});

Route::get('/listdosenkaryawan', function() {
    return view('dosenkaryawan.index');
});

Route::get('/listalumni', function() {
    return view('alumni.index');
});
//=======
//Route::get('/home', 'HomeController@index');
//>>>>>>> 121b8182ff64fdf084da3e1365bb8740607a6b9d
