<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', 'PropertyController@index')->name('home');
Route::get('/search', 'PropertyController@search')->name('search');
Route::get('/detail-pro/{id}', 'PropertyController@details')->name('detail-pro');
Route::get('/contact', 'PropertyController@contact')->name('contact');
Route::get('/about', 'PropertyController@about')->name('about');

Route::post('/send-email', 'EmailController@sendEmail')->name('send-email');

Route::get('/howtobuy', 'PropertyController@howtobuy')->name('howtobuy');



// admin routes
Route::middleware('auth')->group(function () {

    Route::get('/admin', 'AdminController@home')->name('admin');

    // route properties en español
    Route::get('/admin/es/properties', 'AdminController@index')->name('properties-es');
    Route::get('/admin/es/properties/view/{id}', 'AdminController@view')->name('properties-view');
    Route::get('/admin/es/properties/create/view', 'AdminController@create')->name('properties-create-view');
    Route::get('/admin/es/properties/update/view/{id}', 'AdminController@updateView')->name('properties-update-view');
    Route::post('/admin/es/properties/create', 'AdminController@store')->name('properties-create');
    Route::put('/admin/es/properties/update/{id}', 'AdminController@updateProperty')->name('properties-update');
    Route::delete('/admin/es/properties/delete/{id}', 'AdminController@delete')->name('properties-delete');

    // route properties en ingles
    Route::get('/admin/en/properties', 'PropertyEnglishController@index')->name('properties-en');
    Route::get('/admin/en/properties/view/{id}', 'PropertyEnglishController@view')->name('properties-view-en');
    Route::get('/admin/en/properties/create/view', 'PropertyEnglishController@create')->name('properties-create-view-en');
    Route::get('/admin/en/properties/update/view/{id}', 'PropertyEnglishController@updateView')->name('properties-update-view-en');
    Route::post('/admin/en/properties/create', 'PropertyEnglishController@store')->name('properties-create-en');
    Route::put('/admin/en/properties/update/{id}', 'PropertyEnglishController@updateProperty')->name('properties-update-en');
    Route::delete('/admin/en/properties/delete/{id}', 'PropertyEnglishController@delete')->name('properties-delete-en');

    //location routes
    Route::get('admin/location', 'LocationController@index')->name('location');
    Route::post('admin/location/create', 'LocationController@store')->name('location-create');
    Route::delete('admin/location/{id}', 'LocationController@destroy')->name('location-delete');

    // images routes
    Route::get('/admin/properties/images/add/{id}', 'ImageController@add')->name('image-add');
    Route::post('/admin/properties/images/save', 'ImageController@save')->name('image-save');
    Route::get('/admin/properties/images/profile/es/{id}', 'ImageController@profileImageEs')->name('image-profile-es');
    Route::get('/admin/properties/images/profile/en/{id}', 'ImageController@profileImageEn')->name('image-profile-en');
    Route::delete('/admin/image/delete/{id}', 'ImageController@deleteImage')->name('image-delete');

    // details routes
    Route::get('/admin/details', 'DetailController@index')->name('details');
    Route::get('/admin/details/view/{id}', 'DetailController@view')->name('details-view');
    Route::get('/admin/details/create/view', 'DetailController@create')->name('details-create-view');
    Route::get('/admin/details/update/view/{id}', 'DetailController@edit')->name('details-update-view');
    Route::post('/admin/details/create', 'DetailController@store')->name('details-create');
    Route::put('/admin/details/update/{id}', 'DetailController@update')->name('details-update');
    Route::delete('/admin/details/delete/{id}', 'DetailController@destroy')->name('details-delete');

    // Adviser routes
    Route::get('/admin/advisers', 'AdviserController@index')->name('advisers');
    Route::get('/admin/advisers/create/view', 'AdviserController@create')->name('advisers-create-view');
    Route::get('/admin/advisers/update/view/{id}', 'AdviserController@edit')->name('advisers-update-view');
    Route::post('/admin/advisers/create', 'AdviserController@store')->name('advisers-create');
    Route::put('/admin/advisers/update/{id}', 'AdviserController@update')->name('advisers-update');
    Route::delete('/admin/advisers/delete/{id}', 'AdviserController@destroy')->name('advisers-delete');

});

