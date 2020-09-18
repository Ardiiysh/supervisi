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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('schedule', 'ScheduleController');
Route::resource('material', 'MaterialController');
Route::get('file','FileController@create');
Route::post('file','FileController@store');
Route::resource('teacher','TeacherController');


Route::get('kepsek', function () {
    return view('kepala.index');
});
