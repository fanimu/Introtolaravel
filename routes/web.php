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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('tugasitems.index');
});

Route::get('/data-tables', function () {
    return view('tugasitems.data-tables');
});

Route::get('/master', function () {
    return view('/adminlte.master');
});

Route::get('/items', function(){
	return view('/items.index');
});

Route::get('/items/create', function(){
	return view('items.create');
});

// tugas CRUD

Route::get('/pertanyaans/create', 'PertanyaanController@create');
Route::post('/pertanyaans', 'PertanyaanController@store');
Route::get('/pertanyaans', 'PertanyaanController@index');
Route::get('/pertanyaans/{id}', 'PertanyaanController@show');
Route::get('/pertanyaans/{id}/edit', 'PertanyaanController@edit');
Route::put('/pertanyaans/{id}', 'PertanyaanController@update');
Route::delete('/pertanyaans/{id}', 'PertanyaanController@destroy');



// Route::get('/register', 'RegisterController@register');
// Route::post('/welcome', 'RegisterController@welcome');


