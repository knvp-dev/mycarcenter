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
    return view('pages.index');
});

Route::get('/aanbod', function() {
	$client = new \GuzzleHttp\Client();
	$res = $client->get("http://verkopers.autoscout24.be/get/tierarticles?atype=C&cid=7647&ustate=U,N,A&sort=price&results=200&page=1&_=1491929889663");

	$articles = collect(json_decode($res->getBody()))['articles'];

	// dd(collect(json_decode($res->getBody())));

	return view('pages.aanbod', compact('articles'));
});

Route::get('/contact', function(){
	return view('pages.contact');
});
