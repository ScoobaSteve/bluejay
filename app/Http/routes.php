<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('contact', 'WelcomeController@contact');

Route::get('gst_calculator', 'WelcomeController@gst');

Route::get('home', [
    'as' => 'home_path',
    'uses' => 'HomeController@index'
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



Route::resource('clients', 'ClientController');
Route:get('clients', [
    'as' => 'clients_path',
    'uses' => 'ClientController@index'
]);

Route::resource('jobs', 'JobController');
Route::get('jobs', [
    'as' => 'jobs_path',
    'uses' => 'JobController@index'
]);

