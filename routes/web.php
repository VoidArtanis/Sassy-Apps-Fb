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

Route::get('/login', 'Auth\LoginController@redirectToProvider')->name('login');
Route::get('/', 'HomeController@index')->name('home');

Route::get('loginfacebook', 'Auth\LoginController@redirectToProvider');
Route::get('fbcallback', 'Auth\LoginController@handleProviderCallback');

Route::get('/splash', 'AppSplashController@index')->name('splash');

//Apps
Route::get('/fbapp', 'AppControllers\SampleAppController@index');
Route::get('/fbappresult', 'AppControllers\SampleAppResultController@index');


Route::get('/admin', 'AdminController@index');
Route::post('/adminsave', 'AdminController@save');

Route::get('/adminedit', 'AdminController@editIndex');
Route::post('/editSave', 'AdminController@saveEdit');