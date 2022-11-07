<?php

namespace App\Http\Controllers;

use App\Http\Requests\DevisRequest;
use App\Models\devis;
use App\Models\Code;
use Illuminate\Http\Request;
use App\Mail\DevisMail;
use Illuminate\Support\Facades\Mail;


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
        $devis->date=$request->date;
        $devis->hour=$request->hour;
        $devis->code_postal=$request->code_postal;
        $devis->save();

        if($devis->save()){

            //Sendig mail to admin
            Mail::to("delanofofe@gmail.com")->send(new DevisMail($devis));
            Mail::to("pauline.youdom@techwise.fr")->send(new DevisMail($devis));

            Mail::to($request->use()->email)->send(new DevisMail($devis));
            return to_route('devis.form')->with('update_success','Message bien envoyé');
        }
        else{
            return 'erreur';
        }

    }
}
