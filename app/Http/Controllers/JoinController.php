<?php

namespace App\Http\Controllers;

use App\Http\Requests\JoinRequest;
use App\Models\join;
use Illuminate\Support\File;
use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function create(){
        return view('clients.join-us-form');
    }

    public function store(JoinRequest $request){

        $validatedData = $request->validated();

        $join=new join;
        $join->civility=$request->civility;
        $join->name=$request->name;
        $join->username=$request->username;
        $join->phone_number=$request->phone_number;
        $join->email=$request->email;
        $join->postal_code=$request->postal_code;
        $join->town=$request->town;
        $join->informations=$request->informations;
        $join->job=$request->job;
        $join->available=$request->available;
        $join->agency_less_than=$request->agency_less_than;
        $join->agency_from=$request->agency_from;
        $join->year_of_experience=$request->year_of_experience;
        $join->diploma_file=$request->diploma_file;
        $join->diploma=$request->diploma;
        $join->cv=$request->file('cv')->store('public/cv');
         $join->cv=$request->file('diploma_file')->store('public/diploma');

        if($join->save()){
            return view('clients.join-confirm');
        }else{
            return redirect()->back()->with('update_failure','Une erreur est survenue, veuillez réessayez plutard');
        }
    }
}
