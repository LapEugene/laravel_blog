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
    return view('main');
});

Route::get('/articles', [
    'uses' => 'ArticleController@index'
]);

Route::get('/article/{id}', [
    'uses' => 'ArticleController@show'
]);

Route::post('ajax', [
    'as' => 'ajax', 'uses' => 'AjaxController@store'
]);