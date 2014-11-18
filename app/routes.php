<?php

//ver queries
/*
Event::listen('illuminate.query', function($sql){

    echo $sql."<br>";
});
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::post('/', function()
{
    return View::make('home');
});

Route::post('/api/getOrder','OrderController@create');