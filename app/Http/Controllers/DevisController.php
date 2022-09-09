<?php

namespace App\Http\Controllers;

use App\Http\Requests\DevisRequest;
use App\Models\devis;
use Illuminate\Http\Request;

class DevisController extends Controller
{

    public function create(){

        return view('devis.create');
    }

    public function store(DevisRequest $request){

        $devis=new devis;
        $devis->civility==$request->civility;
        $devis->nom=$request->nom;
        $devis->prenom=$request->prenom;
        $devis->email=$request->email;
        $devis->numero=$request->numero;
        $devis->code_postal=$request->code_postal;
        $devis->save();
        if($devis->save()){
            return to_route('devis.form');
        }
        else{
            return 'erreur';
        }

    }
}
