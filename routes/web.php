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

use App\Events\HelloWorldFired;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'fire'], function () {
    Route::get('hello-world/{text?}', function ($text = null) {
        broadcast(new HelloWorldFired($text));
    });
});