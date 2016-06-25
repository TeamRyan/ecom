<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

}

























	// public function testRatings()
	// {

	// 	$beers = Beer::with('ratings')->where('beer_id', '<', 100)->get();

	// 	$beers->sortByDesc(function($beer) {
	// 		return $beer->rating;
	// 	});

	// 	foreach($beers as $beer)
	// 	{
	// 		echo $beer->name . "<br>";
	// 	}

	// 	die();
	// }

	// public function beerList()
	// {
	// 	return View::make('vueTemplates.beer-page');
	// }

	// public function beerPage($offset, $search = null)
	// {
	// 	if ($search != null) {
	// 		$query = Beer::with('brewery', 'style')->skip($offset)->take(2);
	// 		$query->where('name', 'like', "%$search%");
	// 		$beers = $query->get();
	// 	} else {
	// 		$beers = Beer::with('brewery', 'style')->skip($offset)->take(2)->get();
	// 	}
	// 		foreach ($beers as $beer) {
	// 			$beer->aveRating = $beer->rating;
	// 		}
	// 		return Response::json( $beers );
	// }

	// public function test2()
	// {
	// 	$data = Auth::user();
	// 	$data['template'] = View::make('vueTemplates.testInner');
	// 	return View::make( $data );
	// }

	// public function showHome()
	// {
	// 	$beer = Beer::find(Configuration::where('name', '=', 'beer_id')->orderBy('id', 'desc')->first()->value);
	// 	return View::make('home')->with(['beer' => $beer]);
	// }

	// public function postLogin()
	// {
	// 	$email = Input::get('email');
	// 	$password = Input::get('password');


	// 	if (Auth::attempt(array('email' => $email, 'password' => $password))) {

	// 		$user = Auth::user();

	// 	    return Response::json( $user );
	// 	} else {


	// 	    return Response::json( ['login' => 'Incorect email or password'] );
	// 	}
	// }

	// public function getLogout()
	// {
	// 	Auth::logout();

	// 	if ( Auth::user() )
	// 	{
	// 		$response = ['loggedIn' => true];
	// 	} else
	// 	{
	// 		$response = ['loggedIn' => false];
	// 	}
	// 	return Response::json( $response );
	// }

	// public function fbLogin( $fb_id )
	// {
	// 	try {
	// 		$user = User::where('facebook_id','=', $fb_id)->firstOrFail();
	// 	} catch (Exception $e) {

	// 		$user = new User();

	// 		$user->facebook_id = $fb_id;
	// 		$user->role = 1;

	// 		$user->save();
	// 		$user = User::where('facebook_id', $fb_id)->first();
	// 	}
	// 	Auth::login($user);
	// 	return Response::json( Auth::user() );
	// }
