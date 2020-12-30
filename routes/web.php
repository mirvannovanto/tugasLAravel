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

/*Route::get('/', function () {
    return view('welcome');
});*/
//tugas pertama
// Route::get('/', 'HomeController@home');

// Route::get('/register', 'AuthController@register');

// Route::get('/welcome', 'AuthController@welcome');
// Route::post('/welcome', 'AuthController@welcomeReg');


//tugas kedua
/*
Route::get('/',function(){
    return view('index');
});
Route::get('/data-tables',function(){
    return view('data-tables');
});
*/

//tugas CRUD
Route::get('/pertanyaan/create', 'PostController@create');
Route::post('/pertanyaan','PostController@store');
Route::get('/pertanyaan/index', 'PostController@index');
Route::get('/pertanyaan/{tanyaID}', 'PostController@show');
Route::get('/pertanyaan/{tanyaID}/edit', 'PostController@edit');
Route::put('/pertanyaan/{tanyaID}', 'PostController@update');
Route::delete('/pertanyaan/{tanyaID}', 'PostController@destroy');