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

//Route::get('/', function()
//{
//	return View::make('hello');
//});

Route::get('/', 'HomeController@showWelcome');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/resume', 'HomeController@showResume');

Route::get('/my-resume', 'HomeController@showMyResume');

Route::get('/richard-resume', 'HomeController@showMyResume');

Route::get('/roll-dice/{guess?}', 'HomeController@rolldice');

Route::get('/random-guess', 'HomeController@randomGuess');

Route::get('/sayhello/{name?}', 'HomeController@sayHello');

Route::get('/whackamole', 'HomeController@whackamole');

Route::get('/simplesimon', 'HomeController@simplesimon');

Route::get('/weatherMap', 'HomeController@weathermap');

Route::get('/projects', 'HomeController@projects');

Route::resource('posts', 'PostsController');

Route::get('query-test', function()
{
	$posts = Post::where('title', '=', 'test')->get();
	foreach($posts as $post) {
		echo $post->title;
	}

});




Route::resource('users', 'UserController');

Route::get('login', array('uses' => 'UserController@showLogin'));

Route::post('login', array('uses' => 'UserController@doLogin'));

Route::get('logout', array('uses' => 'UserController@logout'));

Route::get('/editPassword/{user}', array('uses' => 'UserController@editPassword'));

Route::put('/editPassword/{user}', array('uses' => 'UserController@updatePassword'));






Route::get('my-posts', function() {
	$user = User::first();

	foreach($user->posts as $post) {
		echo "Title is: $post->title" . "<br>";
		echo "Title is: $post->body" . "<br>";
	}

});

















