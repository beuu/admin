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
    //New
    Route::resource('event', 'Admin\EventController');
    Route::resource('icate', 'Admin\IcateController');
    //New
    Route::resource('ipost', 'Admin\IpostController');
    Route::resource('page', 'Admin\PageController');
    Route::resource('cvideo', 'Admin\CateVideoController');
    Route::resource('video', 'Admin\VideoController');
});
Route::get('/', function () {
    return view('home');
})->name('homeieg');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/toi-va-ieg', 'IegController@toivaieg')->name('toivaieg');
Route::get('/toi-va-ieg-bai-viet', 'IegController@toivaiegp')->name('toivaiegp');