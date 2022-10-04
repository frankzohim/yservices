<?php

namespace App\Http\Controllers\Admin;

use App\Models\Need;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $needs=Need::all();
        return view("admin.Need.index",compact('needs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.Need.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $need=Need::find($id);
        return view('admin.Need.show', compact('need'));
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
        $need = Need::find($id);
        return view('admin.Need.edit', compact('need'));
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
        $needs= Need:: find($id);
        $needs->delete();

        return to_route('need.index');
    }

    public function listCustomers(){

        $customers=User::where('role_id',2)->get();

        return view('admin.Need.listCustomers',compact('customers'));
    }

    public function chooseplanification(Request $request){

        $intervenants=User::where('role_id',3)->get();
        $customerId=$request->id;
        return view('admin.planifications.chooseUser',compact('intervenants','customerId'));

    }

    public function chooseHours(Request $request){

        $intervenantIds=$request->IntervenantId;

        dd($intervenantIds);
    }
}

