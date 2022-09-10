<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Need;
use App\Models\Join;
use App\Models\Contact;
use App\Models\formfranchise;

class DashboardController extends Controller
{
    public function index(){

        $needs = Need::all();
        $contacts = Contact::all();
        $joins = Join::all();
        $franchises = formfranchise::all();

        //Saving data to session
        session(['numberOfJoins' => $joins->count()]);
        session(['numberOfNeeds' => $needs->count()]);
        session(['numberOfContacts' => $contacts->count()]);
        session(['numberOfFranchise' => $franchises->count()]);
        
		return view('dashboard', compact('needs'));
    }
}
