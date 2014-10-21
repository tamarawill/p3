<?php

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

Route::get('/loremipsum', function()
{
	return View::make('loremipsum');
});

Route::get('/makeusers', function()
{
    $faker = Faker\Factory::create();
    return View::make('makeusers')
        ->with('faker', $faker);
});

