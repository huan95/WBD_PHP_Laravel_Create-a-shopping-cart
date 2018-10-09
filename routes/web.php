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

Route::prefix('lists')->group(function () {
    Route::get('home', function () {
        return view('welcome');
    })->name('home_list');

    Route::get('/login', 'LoginController@showLogin')->name('showLogin');
    Route::post('/login', 'LoginController@login')->name('userLogin');
    Route::get('/logout', 'LogoutController@logout')->name('userLogout');
    Route::get('/blog', 'BlogController@showBlog')->name('showBlog');
    Route::get('/index', 'ListsController@index')->name('index');
    Route::get('list/{id}', 'ListsController@show')->name('show');
    Route::get('/{id}/delete', 'ListsController@delete')->name('lists_delete');
    Route::get('add', 'ListsController@create')->name('lists_add');
    Route::post('add','ListsController@store')->name('add');


});