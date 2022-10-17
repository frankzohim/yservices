<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Code;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

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

        return view('main',compact('codes_array'));
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

        $contact=Contact::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'type'=>$types,
            'postal_code'=>$request->postal_code,
            'town'=>$request->town,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message
        ]);



        Mail::to("delanofofe@gmail.com")->send(new ContactMail($contact));
        Mail::to("pauline.youdom@techwise.fr")->send(new ContactMail($contact));


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
