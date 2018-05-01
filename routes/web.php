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

Route::get('/', 'WelcomeController@index')->name('index');

// Auth::routes();

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::post('logout', 'SessionsController@destroy')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UsersController');


Route::get('signup', 'UsersController@create')->name('signup');


// Route::get('categories', 'CategoriesController@index')->name('categories');
Route::resource('categories', 'CategoriesController');
Route::resource('articles', 'ArticlesController');
Route::get('/setting', 'SettingController@index')->name('setting');
