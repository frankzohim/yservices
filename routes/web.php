<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\FranchiseController;
use App\Http\Controllers\Admin\JoinController as AdminJoinController;
use App\Http\Controllers\Admin\NeedController as AdminNeedController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NeedController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\formfranchiseController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\DashboardController;
use App\Models\formfranchise;
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

Route::get('commitment', function () {
    return view('our-commitment');
})->name('commitment');

Route::get('quality', function () {
    return view('quality');
})->name('quality');

Route::get('services', function () {
    return view('services');
})->name('services');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('contact', function () {
	return view("contact");
})->name('contact');

Route::get('functioning', function () {
	return view("functioning");
})->name('functioning');


Route::resources([
        'devis' => NeedController::class,
        'contact' => ContactController::class,
        'partner_form'=> formfranchiseController::class,
    ]);






require __DIR__ . '/auth.php';

Route::group(['prefix' => 'clients'], function () {
    Route::get('franchise', function(){
        return view("clients/franchise");
    })->name('become_partner');


	Route::get('join-us',[JoinController::class,'create'])->name('join-us');
    Route::post('join-us',[JoinController::class,'store'])->name('join.store');

	Route::get('join-us-content', function () {
		return view("clients/rejoindre");

	})->name('join-us-content');



  Route::get('fonctionement', function () {
		return view("clients/fonctionement");

	});

    Route::get('formation', function () {
		return view("clients/formation");

	});

	Route::post('join-confirm', function () {
		return view("clients/join-confirm");

	})->name('join-confirm');

    Route::post('formfranchise', function () {
        return view("clients/formfranchise");

      })->name('partner_form');
});

    Route::middleware('auth')->prefix('admin')->group(function(){
        Route::resource("/need",AdminNeedController::class);
        Route::resource("/franchise",FranchiseController::class);
        Route::resource('/demandes',AdminJoinController::class);
        Route::resource('/contacts',AdminContactController::class);
        Route::resource('articles', ArticleController::class);
    });


Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');


});
