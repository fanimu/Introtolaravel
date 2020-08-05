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
    return view('home');
});

// Route::get('/register', function () {
//     return view('register');
// });

// Route::post('/welcome', function () {
//     return view('welcome');
// });

Route::get('/register', 'RegisterController@register');

//Route::get('/welcome', 'RegisterController@welcome');
Route::post('/welcome', 'RegisterController@welcome');





// Route::get('/halo/{nama}', function ($nama) {
//     return "halo $nama";
// });
