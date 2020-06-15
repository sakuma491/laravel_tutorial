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
Route::get('/', 'LoginController@index')->name('login');
Route::post('/', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::get('/join', 'JoinController@index')->name('join');
Route::post('/join', 'JoinController@join');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/todolist', 'TodolistController@index')->name('todolist');
    Route::get('/todolist/add', 'TodolistController@add');
    Route::post('/todolist/add', 'TodolistController@createTask');
    Route::get('/todolist/edit/{id}', 'TodolistController@edit');
    Route::post('/todolist/edit', 'TodolistController@updateTask');
    Route::get('/todolist/detail/{id}', 'TodolistController@detail');
    Route::get('/todolist/delete/{id}', 'TodolistController@delete');
});
