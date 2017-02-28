<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'PagesController@homepage');

Route::get('gallery', 'PagesController@gallery');

Route::get('gallery/{slug}', 'PagesController@category');

Route::get('gallery/{category_slug}/{gallery_slug}', 'PagesController@album');

Route::get('error', 'PagesController@error');

Route::get('admin', 'AdminController@dashboard');

Route::group(array('prefix' => 'admin'), function()
{
	Route::resource('categories', 'CategoriesController');
	
	Route::resource('galleries', 'GalleriesController');
	
	Route::resource('photos', 'photosController');
});

Auth::routes();


