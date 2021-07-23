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

Route::group(['prefix' => 'home', 'namespace' => 'App\Modules\Home\Controllers', 'middleware' => ['web']], function () {
  Route::get('/', 'Home@index');
  Route::get('/covid19_case', 'Home@covid19_case');
  Route::get('/vaccine_variant', 'Home@vaccine_variant');
  Route::get('/covid19_variant', 'Home@covid19_variant');
  Route::get('/founder', 'Home@founder');
});