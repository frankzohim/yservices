<?php

namespace App\Http\Controllers;

use App\Models\formfranchise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class formfranchiseController extends Controller
{

    public function index()
    {

    }


    public function create()
    {
        return view('clients.formfranchise');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [

        ]);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
           'research'=> ['bail', 'required','string'],
           'civility'=> ['required','string'],
            'name' => ['bail','required','between:5,20','alpha'],
            'surname' => ['bail','required','between:5,20','alpha'],
            'phone' => ['required|numeric'],
            'email' => ['bail|required|email'],
            'adresse' => ['bail|required|max:250'],
            'postal_code'=> ['required|bail'],
            'city' => ['required','string'],
            'occupation' => ['required|max:250'],
            'knowledge' => ['bail|required'],
            'town' => ['required'],
            'capital' => ['required'],
            'description' => ['bail|required|max:500'],
            'news' => ['required|string'],
        ]);

        $franchiseuser = formfranchise::create([
            'research'=>$request->research,
            'civility'=>$request->civility,
            'name' => $request->name,
            'surname'=>$request->surname,
            'phone'=>$request->phone,
            'email' => $request->email,
            'adresse'=>$request->adresse,
            'postal_code'=>$request->postal_code,
            'city'=>$request->city,
            'occupation'=>$request->occupation,
            'knowledge'=>$request->knowledge,
            'town'=>$request->town,
            'capital'=>$request->capital,
            'description'=>$request->description,
            'news'=>$request->news,
        ]);

        return view('clients.confirmfranchise');

    }



    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }



    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
