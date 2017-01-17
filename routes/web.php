<?php

Auth::routes();
Route::get('auth/github', 'Auth\GithubAuthController@redirectToProvider');
Route::get('auth/github/callback', 'Auth\GithubAuthController@handleProviderCallback');

Route::get('/', 'HomeController@index')->name('home'); // return redirect()->home();

Route::group(['middleware' => 'auth.socialite'], function () {

	Route::get('/api/snippets', 'SnippetsController@index');
	Route::get('/api/snippets/create', 'SnippetsController@create');
	Route::get('/api/snippets/{snippet}', 'SnippetsController@show');
	Route::post('/api/snippets', 'SnippetsController@store');


	Route::get('/snippets/{snippet}/fork', 'SnippetsController@create');
});

Route::get('{path}', 'HomeController@index')->where( 'path', '([A-z\d-\/_.]+)?' );

