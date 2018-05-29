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

Route::get('/', function () {
    return view('welcome');
});

//Route to process the RESTful get method to create contact form
Route::get('/contact', 'ContactController@create')->name('contact.create');

//Route to process and store contact form via POST
Route::post('/contact', 'ContactController@store')->name('contact.store');
