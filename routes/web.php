<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NeedController;
use App\Http\Controllers\ContactController;

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
})->name('homepage');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('services', function () {
    return view('services');
})->name('services');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('contact', function () {
	return view("contact");
})->name('contact');


Route::resources([
        'need' => NeedController::class,
				'contact' => ContactController::class,
    ]);

require __DIR__ . '/auth.php';

Route::group(['prefix' => 'clients'], function () {

	Route::get('franchise', function () {
		return view("clients/franchise");
	})->name('become_partner');

	Route::get('join-us', function () {
		return view("clients/rejoindre");

	})->name('join-us');

	Route::get('join-us-form', function () {
		return view("clients/join-us-form");

	})->name('join-us-form');

    Route::get('formfranchise', function () {
		return view("clients/formfranchise");

	})->name('partner_form');

  Route::get('fonctionement', function () {
		return view("clients/fonctionement");

	});

    Route::get('formation', function () {
		return view("clients/formation");

	});

	Route::post('join-confirm', function () {
		return view("clients/join-confirm");

	})->name('join-confirm');
});
Route::get('/co',function(){
    return view('co');
});
