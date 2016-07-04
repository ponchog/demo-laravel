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

Route::get('/artists/ernesto-ibanez', function(){
	return view('artists.ernesto-ibanez');
});

Route::get('/artists/cinthia-nuez', function(){
	return view('artists.cinthia-nuez');
	// return view('artist-ernesto-ibanez');
});

Route::get('/artists/carlos-torres', function(){
	return view('artists.carlos-torres');
	// return view('artist-ernesto-ibanez');
});

Route::get('/artists/pulse', function(){
	// return view('artist-pulse');
	return view('artists.pulse');
});

Route::get('artists/daniel-escobedo', function(){
	// return view('artist-daniel-escobedo');
	return view('artists.daniel-escobedo');
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

Route::get('/test', function(){
	$data = array('email' => 'contact@arteinternationalus.com',
				'name' => 'Test');
	
	Mail::send('emails.contact-email', $data, function ($m) use ($data) {
        $m->from('contact@arteinternationalus.com', 'Arte International');
        $m->to('ponchog@gmail.com', 'Test')->subject('This is the subject!');
    });
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
