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

    //File manager
    Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');

    Route::get('/', 'HomeController@index')->name('admin');
    // user
    Route::resource('user','Admin\UserController');
    // role
    Route::resource('roles', 'Admin\RoleController');
    //newcate
    Route::resource('postcate', 'Admin\CategoryNewController');
    //New
    Route::resource('post', 'Admin\NewController');
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
