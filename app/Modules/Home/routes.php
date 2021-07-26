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
  Route::get('/covid19_case', ['as' => 'home.covid19_case', 'uses' => 'Home@covid19_case']);
  Route::get('/covid19_case_create', ['as' => 'home.covid19_case_create', 'uses' => 'Home@covid19_case_create']);
  Route::get('/covid19_case_edit/{id}', ['as' => 'home.covid19_case_edit', 'uses' => 'Home@covid19_case_edit']);
  Route::get('/covid19_case_delete/{id}', ['as' => 'home.covid19_case_delete', 'uses' => 'Home@covid19_case_delete']);
  Route::post('/covid19_case_update/{id}', ['as' => 'home.covid19_case_update', 'uses' => 'Home@covid19_case_update']);
  Route::post('/covid19_case_save', 'Home@covid19_case_save');
  Route::get('/vaccine_variant', 'Home@vaccine_variant');
  Route::get('/covid19_variant', 'Home@covid19_variant');
  Route::get('/founder', 'Home@founder');
});