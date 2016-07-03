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
// App::bind('Acme\Billing\BillingInteface', 'Acme\Billing\StripeBilling');



Route::get('/', function()
{
	return View::make('home');
});

Route::resource('/users', 'UsersController');

Route::resource('sales', 'SalesController');

Route::resource('products', 'ProductsController');

Route::resource('carts', 'CartsController');

Route::resource('photos', 'PhotosController');


