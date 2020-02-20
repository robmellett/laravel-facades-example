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

use Contentful\Delivery\Client as DeliveryClient;

Route::get('/', function () {

    $client = \App::make("contentful");
    $entries = $client->getEntries();

    // $access_token = config('contentful')['delivery.token'];
    // $space_id = config("contentful")['delivery.space'];
    // $environment = config("contentful")['delivery.environment'];

    // $client = new DeliveryClient($access_token, $space_id, $environment);

    dd($entries);

    // return view('welcome');
});
