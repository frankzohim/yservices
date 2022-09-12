<?php

namespace App\Http\Controllers;

use App\Http\Requests\DevisRequest;
use App\Models\devis;
use App\Models\Code;
use Illuminate\Http\Request;


class DevisController extends Controller
{

    public function create(){

        $codes = Code::select('Commune', 'Codepos')->get();
        $i=0;
        
        foreach($codes as $code){
            $codes_array[$i] = ''.$code->Codepos.','.$code->Commune;
            $i++;
        }

        return view('devis.create', compact('codes_array'));
    }

    public function store(DevisRequest $request){

        $devis=new devis;
        $devis->civility=$request->civility;
        $devis->nom=$request->nom;
        $devis->prenom=$request->prenom;
        $devis->email=$request->email;
        $devis->numero=$request->numero;
        $devis->code_postal=$request->code_postal;
        $devis->save();
        if($devis->save()){
            return to_route('devis.form')->with('update_success','Message bien envoyé');
        }
        else{
            return 'erreur';
        }

    }
}
