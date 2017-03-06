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

Route::get('/wad2', function () {
    return view('WAD2_Project');
}); 

Route::get('/add', 'StudentController@index');

Route::post('add', 'StudentController@add');

Route::get('assign', 'StudentController@view');

Route::get('edit/{id}', 'StudentController@edit');

Route::post('update', 'StudentController@update');

Route::get('delete/{id}', 'StudentController@delete');

Route::get('/success', function () {
    return view('Success');
}); 