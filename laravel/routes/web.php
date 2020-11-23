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

use App\Http\Controllers\CustemerController;

Route::get('/', function () {
    return view('welcome');
});

// login機能
Auth::routes();

Route::group(['middleware'=> 'auth'], function (){
    Route::resource('companies', 'CompanyController@index');
});


// Route::group('prefix' => 'custemer', 'middleware'=> 'auth'], function (){
//     Route::get('index', 'CustemerController@index')->name('custemer.index');
// });


//Rest
// Route::resource('custemers', 'CustemerController');

Route::get('home', 'HomeController@index')->name('home');

Route::resource('companies', 'CompanyController');

// Route::resource('home', 'CompanyController');


