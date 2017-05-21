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

Route::get('/services', function(){	
	return view('services');
});

Route::get('/services/artists', function(){	
	return view('services.artists');
});

Route::get('/services/galleries', function(){	
	return view('services.galleries');
});

Route::get('/services/corporate', function(){
	return view('services.corporate');
});

Route::post('/send-contact-email', 'EmailController@sendContactEmail');


/*
|--------------------------------------------------------------------------
| Artists
|--------------------------------------------------------------------------
*/

Route::get('/artists/', function(){
	return view('artists');
});

Route::get('/artists/ernesto-ibanez', function(){
	return view('artists.ernesto-ibanez');
});

Route::get('/artists/cinthia-nuez', function(){
	return view('artists.cinthia-nuez');
});

Route::get('/artists/carlos-torres', function(){
	return view('artists.carlos-torres');
});

Route::get('/artists/pulse', function(){
	return view('artists.pulse');
});

Route::get('/artists/daniel-escobedo', function(){
	return view('artists.daniel-escobedo');
});

Route::get('/artists/jesus-villalpando', function(){
	return view('artists.jesus-villalpando');
});

Route::get('/artists/fernando-andrade', function(){
	return view('artists.fernando-andrade');
});

Route::get('/artists/patricia-sanchez-saiffe', function(){
	return view('artists.patricia-sanchez');
});

Route::get('/artists/roberto-morleghem', function(){
	return view('artists.roberto-morleghem');
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
