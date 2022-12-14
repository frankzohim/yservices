<?php

namespace App\Http\Controllers;
use App\Models\Code;
use App\Http\Requests\JoinRequest;
use App\Mail\JoinMail;
use App\Models\Join;
use Illuminate\Support\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class JoinController extends Controller
{
    public function create(){

        $codes = Code::select('Commune', 'Codepos')->get();
        $i=0;

        foreach($codes as $code){
            $codes_array[$i] = ''.$code->Codepos.','.$code->Commune;
            $i++;
        }

        //echo "<pre>";print_r($communes_array);
        return view('clients.join-us-form',compact('codes_array'));
    }

    public function store(JoinRequest $request){

        $validatedData = $request->validated();
        //dd($request->postal_code);
       
        $data = explode(',',$request->postal_code);
        if(count($data) == 2){
            $town = $data[1];
            $postal_code = $data[0];
        }
        else
            return Redirect::back()->with('update_failure','Code postal invalide');

        $join=new Join;
        $join->civility=$request->civility;
        $join->name=$request->name;
        $join->username=$request->username;
        $join->phone_number=$request->phone_number;
        $join->email=$request->email;
        $join->postal_code=$postal_code;
        $join->town=$town;
        $join->informations=$request->informations;
        $join->job=$request->job;
        $join->available=$request->available;
        $join->year_of_experience=$request->year_of_experience;
        $join->diploma_file=$request->file('diploma_file')->store('public/diploma');
        $join->diploma=$request->diploma;
        $join->cv=$request->file('cv')->store('public/cv');

        if($join->save()){
            Mail::to("delanofofe@gmail.com")->send(new JoinMail($join));
            Mail::to("pauline.youdom@techwise.fr")->send(new JoinMail($join));
            return view('clients.join-confirm');
        }else{
            return redirect()->back()->with('update_failure','Une erreur est survenue, veuillez r??essayez plutard');
        }
    }
}
