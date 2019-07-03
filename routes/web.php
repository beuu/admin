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
Route::group(['prefix' => 'quan-tri','middleware' => 'auth'], function() {

    Route::get('/', 'HomeController@index')->name('admin');
    // user
    Route::resource('user','Admin\UserController');
    // role
    Route::resource('roles', 'Admin\RoleController');
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
