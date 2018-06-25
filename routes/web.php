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
    return view('home');
});
Route::get('/gymadd', function () {
    return view('gymadd');
});
Route::get('/gymuseradd', function () {
    return view('gymuseradd');
});
Route::get('/date', function () {
    return view('date');
});
Route::get('/instructoradd', function () {
    return view('instructoradd');
});
Route::get('/gymplanadd', function () {
    return view('gymplanadd');
});
Route::post('students/save','StudentsController@save' );
Route::get('/showData','StudentsController@show' );
 

 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
