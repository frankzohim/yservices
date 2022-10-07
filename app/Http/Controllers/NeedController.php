<?php

namespace App\Http\Controllers;

use App\Models\Code;
use App\Models\Need;
use App\Mail\NeedEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class NeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $codes = Code::select('Commune', 'Codepos')->get();
        $i=0;

        foreach($codes as $code){
            $codes_array[$i] = ''.$code->Codepos.','.$code->Commune;
            $i++;
        }

        return view("need.assistant",compact('codes_array'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $need = new Need;
        //dd($request->services);
        $i =0;
        foreach($request->services as $service){
            if ($i==0)
                $need->services = $service;

            else{

                $need->services .= ', '.$service;
            }

             $i++;

        }

        $data = explode(',',$request->postal_code);
        if(count($data) == 2){
            $town = $data[1];
            $postal_code = $data[0];
        }
        else
             return Redirect::route('devis.create')->with('update_failure','Code postal invalide')->withInput();

        $need->start_at = $request->start_at;
        $need->data_times = $request->data_times;
        $need->for_who = $request->for_who;
        $need->gender = $request->gender;
        $need->firstname = $request->firstname;
        $need->lastname = $request->lastname;
        $need->postal_code = $postal_code;
        $need->town = $town;
        $need->email = $request->email;
        $need->phone = $request->phone;
        $need->address = $request->address;
        $need->user_id=null;


        if($need->save()){
            //Sendig mail to admin
            Mail::to("delanofofe@gmail.com")->send(new NeedEmail($need));
            Mail::to("pauline.youdom@techwise.fr")->send(new NeedEmail($need));

            return view('need.confirm');
        }else{
            return 'Une erreur a ete produite';
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
