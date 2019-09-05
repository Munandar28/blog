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

// route ke homepage
Route::get('/', function() {
    return redirect()->route('signin');
})->name('home');

// route signin signout auth
Route::get('/signin', 'SignInController@index')->name('signin');
Route::get('/signout', 'SignInController@signout')->name('signout');
Route::post('/auth', 'SignInController@auth')->name('auth');

// route view cv dan portfolio
Route::get('/cv', 'PageController@cv')->name('cv');
Route::get('/portfolio', 'PageController@portfolio')->name('portfolio');
// Route::get('/test123','PageController@test123')->name('test123');
// Route::get('/cv/tambah','PageController@tambah');

// route store data ke db dan CRUD
// Route::post('/test123/store','PageController@store');
// Route::post('/test123/update','PageController@edit');
// Route::get('/test123/edit/{id}','PageController@edit');
