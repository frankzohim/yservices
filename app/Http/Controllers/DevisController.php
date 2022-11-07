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

        return view('devis.main', compact('codes_array'));
    }

    public function store(DevisRequest $request){

        $i =0;
        $services ="";
        foreach($request->type as $type){
            if ($i==0)
                $services = $type;

            else{

                $services .= ', '.$type;
            }

             $i++;

        }

        $devis=new devis;
        $devis->for_who=$request->for_who;
        $devis->services=$services;
        $devis->start_time=$request->start_time;
        $devis->civility=$request->civility;
        $devis->firstname=$request->firstname;
        $devis->lastname=$request->lastname;
        $devis->email=$request->email;
        $devis->phone=$request->phone;
        $devis->postal_code=$request->postal_code;
        $devis->town=$request->town;
        $devis->comments=$request->comments; 
        $devis->news=$request->news;
        $devis->accept_cgu = 1;
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
