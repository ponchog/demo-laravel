<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {    
    return view('about');
});

Route::get('/contact', function () {    
    return view('contact');
});

Route::get('/ernesto-ibanez', function(){
	return view('artist-ernesto-ibanez');
});

Route::get('/cinthia-nuez', function(){
	// return view('artist-cinthia-nuez');
	return view('artist-ernesto-ibanez');
});

Route::get('/pulse', function(){
	// return view('artist-pulse');
	return view('artist-ernesto-ibanez');
});

Route::get('/daniel-escobedo', function(){
	// return view('artist-daniel-escobedo');
	return view('artist-ernesto-ibanez');
});

Route::get('/services', function(){
	// return view('artist-daniel-escobedo');
	return view('services');
});

Route::get('/services/artists', function(){
	// return view('artist-daniel-escobedo');
	return view('services.artists');
});

Route::get('/services/galleries', function(){
	// return view('artist-daniel-escobedo');
	return view('services.galleries');
});

Route::get('/services/corporate', function(){
	// return view('artist-daniel-escobedo');
	return view('services.corporate');
});

// Route::get('/artist', function(){
// 	return view('artist');
// });

// Route::get('/artist2', function(){
// 	return view('artist2');
// });

Route::get('/artists/', function(){
	return view('artists');
});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
