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

// Route::get('/tasks', 'TaskController@index')->name('show.tasks');
// Route::post('/task', 'TaskController@store')->name('create.task');
// Route::delete('/task/{task}', 'TaskController@destroy')->name('delete.task');
Route::resource('tasks', 'TaskController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
