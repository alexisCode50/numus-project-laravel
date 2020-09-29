<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PropertyController@index')->name('home');
Route::get('/search', 'PropertyController@search')->name('search');
Route::get('/details/{id}', 'PropertyController@details');
Route::get('/detailss', 'PropertyController@details2');


// admin routes
Route::middleware('auth')->group(function () {
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::get('/admin/properties', 'AdminController@show')->name('admin-properties');
    // get by id
    Route::get('/admin/properties/view/{id}', 'AdminController@view')->name('properties-view');
    Route::get('/admin/properties/find/{id}', 'AdminController@find')->name('properties-find');

    // create and update
    Route::get('/admin/properties/create/view', 'AdminController@create')->name('properties-create-view');
    Route::post('/admin/properties/create', 'AdminController@create')->name('properties-create');
    Route::post('/admin/properties/update', 'AdminController@update')->name('properties-update');

    // delete property
    Route::delete('/admin/properties/delete/{id}', 'AdminController@update')->name('properties-delete');

    // images routes
    Route::post('/admin/properties/images/add/{id}', 'AdminController@create')->name('image-add');
    Route::delete('/admin/image/delete/{id}', 'AdminController@update')->name('image-delete');

});

