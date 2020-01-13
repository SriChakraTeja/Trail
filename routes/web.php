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
Route::post('/update/{id}','PagesController@update')->name('pages.update');

Route::get('/edit/{id}','PagesController@edit')->name('pages.edit');

Route::get('/contactslist','PagesController@readContacts')->name('pages.contactslist');

Route::post('/contact','PagesController@storeContact')->name('storeContact');

Route::get('/','PagesController@getWelcome')->name('pages.welcome');

Route::get('/about','PagesController@getAbout')->name('pages.about');

Route::get('/contact','PagesController@getContact')->name('pages.contact');

Route::get('/advertise','PagesController@getAdvertise')->name('pages.advertise');

Route::get('/business','PagesController@getBusiness')->name('pages.business');

Route::get('/rating','PagesController@getRating')->name('pages.rating');

Route::get('/query','PagesController@getRating')->name('pages.query');

