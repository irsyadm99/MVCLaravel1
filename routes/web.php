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
}); */

//Route::get('/', 'HomeController@View');

Route::get('/', function(){
    return view('tables.table1');
});

Route::get('/data-tables', function(){
    return view('tables.data');
});

Route::get('/register', 'AuthController@RegisView');

Route::post('/welcome', 'AuthController@WelcomePost');

Route::get('/master', function(){
    return view('adminlte.master');
});
