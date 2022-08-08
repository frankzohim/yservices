<?php

use Illuminate\Support\Facades\Route;

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
    return view('homepage');
});

Route::group([ 'prefix' => 'clients'], function () {
    Route::get("rejoindre", function () {
        return view('clients/rejoindre');
    });

    Route::get("franchise", function () {
        return view('clients/franchise');
    });
});


