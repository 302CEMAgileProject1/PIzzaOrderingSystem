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
    return view('user.home');
});

Auth::routes();

Route::get('/menu', 'ProductController@index')->name('product.index');

Route::get('/profile/{user}', 'ProfileController@show')->name('profile.show');
Route::patch('/profile', 'ProfileController@update');

Route::get('/promotion', 'PromotionController@index')->name('promotion.index');

Route::get('/feedback', 'FeedbackController@create')->name('feedback.create');
Route::post('/feedback', 'FeedbackController@store');

// Route::get('/order', 'OrderController@index')->name('get.order.index');

Route::get('/promotion', 'PromotionController@index');

Route::get('/feedback', 'FeedbackController@index');

Route::get('/aboutUs', 'AboutUsController@index');
