<?php

use App\Models\Code;
use App\Models\formfranchise;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlocController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\NeedController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TypeAheadController;
use App\Http\Controllers\Admin\CreateController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\formfranchiseController;
use App\Http\Controllers\Admin\FranchiseController;
use App\Http\Controllers\Admin\JoinController as AdminJoinController;
use App\Http\Controllers\Admin\NeedController as AdminNeedController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\Planification\PlanificationController;

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

	$codes = Code::select('Commune', 'Codepos')->get();
        $i=0;

        foreach($codes as $code){
            $codes_array[$i] = ''.$code->Codepos.','.$code->Commune;
            $i++;
        }

        //session()->put('nos-cookies', true);
    return view('homepage',compact('codes_array'));
})->name('homepage');


Route::get('/maintech', function(){
    return view('main');
});

Route::get('/homepage', function(){
    $codes = Code::select('Commune', 'Codepos')->get();
        $i=0;

        foreach($codes as $code){
            $codes_array[$i] = ''.$code->Codepos.','.$code->Commune;
            $i++;
        }
    return view('homepageblade',compact('codes_array'));
});


Route::get('set/cookies',[HomeController::class, 'cookies'])->name('setCookies');



Route::get('service/model', function () {
    return view('services.service_model');
})->name('service.model');

Route::get('cgu', function () {
    return view('cgu');
})->name('cgu');

Route::get('confidentialite', function () {
    return view('confidentialite');
})->name('confidentialite');

Route::get('garde-nuit', function () {
    return view('services.garde-nuit');
})->name('garde-nuit');

Route::get('nos-formations', function () {
    return view('services.nos-formations');
})->name('nos-formations');

Route::get('nos-metiers', function () {
    return view('services.nos-metiers');
})->name('nos-metiers');

Route::get('accompagnement', function () {
    return view('services.accompagnement');
})->name('accompagnement');


Route::get('mail', function () {
    return view('mail.template');
})->name('mail');

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



Route::get('contact', function () {
	return view("contact");
})->name('contact');

Route::get('functioning', function () {
	return view("functioning");
})->name('functioning');

Route::get('/autocomplete-search', [TypeAheadController::class, 'autocompleteSearch']);


Route::get('autocomplete', [TypeAheadController::class, 'autocomplete'])->name('autocomplete');

Route::get('/typeahead_autocomplete/action', [TypeAheadController::class, 'action'])->name('typeahead_autocomplete.action');
Route::post('/transition', [NeedController::class, 'transition'])->name('devis.transition');

Route::resources([
        'devis' => NeedController::class,
        'contact' => ContactController::class,
        'partner_form'=> formfranchiseController::class,
    ]);


    Route::group(['middleware'=>['guest']],function(){

        Route::get('/form/devis',[DevisController::class,'create'])->name('devis.form');
        Route::post('/form',[DevisController::class,'store'])->name('devis.send');
    });




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
        Route::get('/role', [RoleController::class, 'index'])->name('role.index');
        Route::get('demande/{id}', [CreateController::class, 'CreateById']
        // {
        //     return view('demandes.index');
        // }
        )->name('demande.CreateById');

        Route::post("save",[CreateController::class,'store'])->name('demandes.store');

        Route::get('needUser/{id}',[CreateController::class,'createUserById'])->name('need.createUser');
        Route::post('need/store',[CreateController::class,'storeUser'])->name('need.storeUser');

        Route::resource('/planifications',PlanificationController::class);
        Route::get('chooseUser',[AdminNeedController::class,'listCustomers'])->name('list.users');
        Route::get('planification/chooseUser{id}',[AdminNeedController::class,'chooseplanification'])->name('choose.planification');
        Route::post('/ChooseHours',[AdminNeedController::class,'chooseHours'])->name('choose.hours');

    });

Route::get('/blocs',[BlocController::class,'index'])->name('bloc.index');
Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

        Route::get('/calender', function () {
            return view('calender');
        });

});
