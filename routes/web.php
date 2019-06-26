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


Auth::routes();

Route::resource('/home', 'HomeController');

Route::resource('/items', 'ItemsController');

Route::resource('/categories', 'CategoriesController');

Route::resource('pos', 'POSController');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

