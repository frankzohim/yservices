<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NeedController;

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
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

   Route::resources([
        'need' => NeedController::class,
    ]);

require __DIR__ . '/auth.php';
Route::group(['prefix' => 'clients'], function () {

	Route::get('franchise', function () {
		return view("clients/franchise");
	});
	Route::get('rejoindre', function () {
		return view("clients/rejoindre");

	});
    Route::get('formfranchise', function () {
		return view("clients/formfranchise");

	});

    Route::get('fonctionement', function () {
		return view("clients/fonctionement");

	});
});

Route::get('/nous-rejoindre',function(){
    return view('nous-rejoindre');
});
