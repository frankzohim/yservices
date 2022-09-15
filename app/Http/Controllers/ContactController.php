<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Code;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $contacts= Contact::all();
        //dd($contacts);
        return view('admin.contacts.index',compact('contacts'));
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

        return view('contact',compact('codes_array'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $validatedData = $request->validated();

        $i =0;
        $types ="";
        foreach($request->type as $type){
            if ($i==0)
                $types = $type;

            else{

                $types .= ', '.$type;
            }

             $i++;

        }

        //dd($types);

        $data = explode(',',$request->postal_code);
        if(count($data) == 2){
            $town = $data[1];
            $postal_code = $data[0];
        }
        else
            return redirect()->route('contact.create')->with('update_failure','Code postal invalide');

        Contact::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'type'=>$types,
            'postal_code'=>$postal_code,
            'town'=>$town,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message
        ]);

        return redirect()->route('contact.create')->with('update_success','Message bien envoyé');
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
