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

Route::any('/makeusers', function()
{
    $data = Input::all();
    $qty = 5;
    $users; //array of users
    $outofrangeerr = FALSE;

    if (array_key_exists('qty', $data)){
        if ( (int)$data['qty'] < 1 ||
            (int)$data['qty'] > 100 ) {
            $outofrangeerr = TRUE;
        } else {
            $qty = $data['qty'];
        }
    }

    $faker = Faker\Factory::create();

    for($i = 0; $i < $qty; $i++){
        $users[$i] = array(
            'name' => $faker->name,
            'email' => $faker->email,
            'address' => $faker->address,
            'text' => $faker->text
        );
    }
    //echo Pre::render($users, 'Users'); //debug
    return View::make('makeusers')
        ->with('users', $users)
        ->with('outofrangeerr', $outofrangeerr);
});

