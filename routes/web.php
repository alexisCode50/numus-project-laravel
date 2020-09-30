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

    // create and update
    Route::get('/admin/properties/create/view', 'AdminController@create')->name('properties-create-view');
    Route::get('/admin/properties/update/view/{id}', 'AdminController@updateView')->name('properties-update-view');
    Route::post('/admin/properties/create', 'AdminController@store')->name('properties-create');
    Route::post('/admin/properties/update', 'AdminController@updateProperty')->name('properties-update');

    // delete property 
    Route::delete('/admin/properties/delete/{id}', 'AdminController@delete')->name('properties-delete');

    // delete property
    Route::delete('/admin/properties/delete/{id}', 'AdminController@update')->name('properties-delete');


    // images routes
    Route::get('/admin/properties/images/add/{id}', 'AdminController@add')->name('image-add');
    Route::post('/admin/properties/images/save', 'AdminController@save')->name('image-save');
    Route::post('/admin/properties/images/profile', 'AdminController@save')->name('image-profile');
    Route::delete('/admin/image/delete/{id}', 'AdminController@deleteImage')->name('image-delete');

});

