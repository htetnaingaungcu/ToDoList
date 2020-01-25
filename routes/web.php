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

Route::get('/home', 'HomeController@index')
    ->name('home')
    ->middleware('auth');

Route::resource('post', 'PostController');

Route::get('/customer/login', 'CustomerController@loginForm');

Route::post('/customer/login', 'CustomerController@login');


Route::get('/to_do/login', 'ToDoListController@login');
Route::post('/to_do/login', 'ToDoListController@toDoLogin');
Route::resource('to_do_list', 'ToDoListController');
