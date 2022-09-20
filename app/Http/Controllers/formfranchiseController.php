<?php

namespace App\Http\Controllers;
use App\Models\Code;
use App\Models\formfranchise;
use App\Mail\FranchiseMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class formfranchiseController extends Controller
{

    public function index()
    {

    }


    public function create()
    {
        $codes = Code::select('Commune', 'Codepos')->get();
        $i=0;
        
        foreach($codes as $code){
            $codes_array[$i] = ''.$code->Codepos.','.$code->Commune;
            $i++;
        }

        return view('clients.formfranchise', compact('codes_array'));
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
            'occupation' => ['required|max:250'],
            'knowledge' => ['bail|required'],
            'town' => ['required'],
            'capital' => ['required'],
            'description' => ['bail|required|max:500'],
            'news' => ['required|string'],
        ]);

      $data = explode(',',$request->postal_code);
        if(count($data) == 2){
            $town = $data[1];
            $postal_code = $data[0];
        }
        else
             return Redirect::back()->with('update_failure','Code postal invalide')->withInput();


        $franchise = formfranchise::create([
            'research'=>$request->research,
            'civility'=>$request->civility,
            'name' => $request->name,
            'surname'=>$request->surname,
            'phone'=>$request->phone,
            'email' => $request->email,
            'adresse'=>$request->adresse,
            'postal_code'=>$postal_code,
            'city'=>$town,
            'occupation'=>$request->occupation,
            'knowledge'=>$request->knowledge,
            'town'=>$request->town,
            'capital'=>$request->capital,
            'description'=>$request->description,
            'news'=>$request->news,
        ]);

        //Sendig mail to admin
            Mail::to("delanofofe@gmail.com")->send(new FranchiseMail($franchise));
            Mail::to("pauline.youdom@techwise.fr")->send(new FranchiseMail($franchise));
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
