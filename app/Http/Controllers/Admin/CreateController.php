<?php

namespace App\Http\Controllers\Admin;

use App\Models\Join;
use App\Models\Need;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\Join\UserRegistration;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\UserStoreRequest;

class CreateController extends Controller
{
    public function CreateById($id)
    {
        $join = Join::find($id);

        return view('admin.joins.create', compact('join'));
    }

    public function createUserById($id){

        $need=Need::find($id);

        return view('admin.Need.createUser',compact('need'));
    }

    public function store(Request $request)
    {
        $password = Str::random(8).''.rand( 10000, 99999 );

        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' =>3,
            'agency_id' =>1,
            'password'=>Hash::make($password)
        ]);

        $join=Join::find($request->id);
        $id=$user->id;

        $join->update([
        'civility'=>$request->civility,
        'name'=>$request->name,
        'username'=>$request->username,
        'phone_number'=>$request->phone_number,
        'email'=>$request->email,
        'postal_code'=>$request->postal_code,
        'town'=>$request->town,
        'informations'=>$request->informations,
        'job'=>$request->job,
        'available'=>$request->available,
        'diploma'=>$request->diploma,
        'cv'=>$request->cv,
        'user_id'=>$id,
        ]);

        //Mail::to("Bramslevel129@gmail.com")->send(new UserRegistration($user,$password));

        return to_route('demandes.index');
    }

    public function storeUser(Request $request)
    {
        $password = Str::random(8).''.rand( 10000, 99999 );

        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' =>2,
            'agency_id' =>1,
            'password'=>Hash::make($password)
        ]);
        $need=Need::find($request->id);
        $id=$user->id;

        $need->update([
            'services'=>$request->services,
            'start_at'=>$request->start_at,
            'data_times'=>$request->data_times,
            'for_who'=>$request->for_who,
            'gender'=>$request->gender,
            'firstname'=>$request->firstname,
            'lastname'=>$request->name,
            'postal_code'=>$request->postal_code,
            'town'=>$request->town,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'user_id'=>$id
        ]);




        //Mail::to("Bramslevel129@gmail.com")->send(new UserRegistration($user,$password));

        return to_route('need.index');
    }

}
