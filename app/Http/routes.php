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

Route::get('/', function () {
    return view('welcome');
});

Route::post('event', 'TableGiftsController@addEvent');

Route::get('event/{event_id}', 'TableGiftsController@showEvent');


Route::post('event/{event_id}/item', 'TableGiftsController@addItem');

Route::post('event/{event_id}/invite', 'TableGiftsController@addInvite');
