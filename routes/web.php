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

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');

Route::get('/', 'HomeController@welcome')->name('home');

Route::post('/rating', 'RatingController@store');

Route::post('/venue', 'VenueController@store');

Route::post('/venue/rating', 'VenueRatingController@store');

Route::get('/{countryName}/{cityName}', 'CityController@show');