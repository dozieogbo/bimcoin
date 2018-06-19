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

Route::get('', 'HomeController@index')->name('index');
Route::get('/logout', 'HomeController@logout')->name('logout');

Auth::routes();

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/how_to', 'HomeController@howTo')->name('how.to');
Route::get('/donate', 'HomeController@donate')->name('donate');
Route::get('/terms', 'HomeController@terms')->name('terms');
Route::get('/verify', 'HomeController@verify')->name('verify');
Route::post('/profile', 'HomeController@profile')->name('profile');
Route::post('/subscribe', 'HomeController@subscribe')->name('subscribe');
Route::get('/report', 'HomeController@report')->name('report');
Route::get('/report/{id}', 'HomeController@userReport')->name('user.report');