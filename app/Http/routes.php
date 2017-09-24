<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',            	['as'=>'main_page',		'uses'=>'HomeController@index']);
Route::get('/contact-us',   ['as'=>'contact_us',	'uses'=>'ContactUsController@index']);
Route::get('/about-us',		['as'=>'about_us',  	'uses'=>'AboutUsController@index']);
Route::get('/products',		['as'=>'products',  	'uses'=>'ProductsController@index']);
Route::get('/news-and-event',		['as'=>'news_event',  	'uses'=>'NewsAndEventController@index']);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
