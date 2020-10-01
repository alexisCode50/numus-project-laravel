<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PropertyController@index')->name('home');
Route::get('/search', 'PropertyController@search')->name('search');
Route::get('/details/{id}', 'PropertyController@details');
Route::get('/detailss', 'PropertyController@details2');
Route::get('/contact', 'PropertyController@contact');
Route::get('/about', 'PropertyController@about');


// admin routes
Route::middleware('auth')->group(function () {

    Route::get('/admin', 'AdminController@index')->name('admin');

    // get by id
    Route::get('/admin/properties/view/{id}', 'AdminController@view')->name('properties-view');

    // create and update
    Route::get('/admin/properties/create/view', 'AdminController@create')->name('properties-create-view');
    Route::get('/admin/properties/update/view/{id}', 'AdminController@updateView')->name('properties-update-view');
    Route::post('/admin/properties/create', 'AdminController@store')->name('properties-create');
    Route::put('/admin/properties/update/{id}', 'AdminController@updateProperty')->name('properties-update');
    Route::delete('/admin/properties/delete/{id}', 'AdminController@delete')->name('properties-delete');

    //location routes
    Route::get('admin/location', 'LocationController@index');
    Route::post('admin/location/create', 'LocationController@store')->name('location-create');
    Route::delete('admin/location/{id}', 'LocationController@destroy')->name('location-delete');

    // images routes
    Route::get('/admin/properties/images/add/{id}', 'ImageController@add')->name('image-add');
    Route::post('/admin/properties/images/save', 'ImageController@save')->name('image-save');
    Route::get('/admin/properties/images/profile/{id}', 'ImageController@profileImage')->name('image-profile');
    Route::delete('/admin/image/delete/{id}', 'ImageController@deleteImage')->name('image-delete');

});

