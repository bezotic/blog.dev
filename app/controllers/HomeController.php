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

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showMyResume()
	{
		return Redirect::action('HomeController@showResume');
	}

	public function rolldice($guess)
	{
	$randomNumber = mt_rand(1, 6);
		$data = [ 'guess' => $guess,
				 'randomNumber'=>$randomNumber
				];
	 return View::make('roll-dice')->with($data);
	}

	public function randomGuess()
	{
		$guess = mt_rand(1,6);
		return Redirect::action('HomeController@rolldice', $guess);
	}

	public function whackamole()
	{
		return View::make('whackamole');
	}

	public function simplesimon()
	{
		return View::make('simplesimon');
	}

	public function weathermap()
	{
		return View::make('weatherMap');
	}

	public function projects()
	{
		return View::make('projects.projects');
	}

	



}

