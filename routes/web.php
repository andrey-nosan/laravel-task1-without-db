<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('home');
});

Route::get('home', function() {
	return view('home')
		->with([
			'header' => 'Home Page'
		]);
});

Route::get('articles', 'IndexController@articlesList')
	->name('articles');

Route::get('article/{id}', 'IndexController@articleShow')
	->where('id', '[0-9]+')
	->name('article');

Route::get('about', function() {
	return view('about')->with([
		'header' => 'About Us'
	]);
})->name('about');

Route::get('contact-us', 'IndexController@contactForm')->name('contactUs');
Route::post('contact-us', 'IndexController@contactSend')->name('contactSend');
Route::get('thank-you', 'IndexController@thankYou');
