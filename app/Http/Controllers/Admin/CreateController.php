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

        Mail::to("Bramslevel129@gmail.com")->send(new UserRegistration($user,$password));

        return to_route('demandes.index');
    }

    public function storeUser(Request $request)
    {
        $password = Str::random(8).''.rand( 10000, 99999 );

        $need=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' =>2,
            'agency_id' =>1,
            'password'=>Hash::make($password)
        ]);

        //Mail::to("Bramslevel129@gmail.com")->send(new UserRegistration($user,$password));

        return to_route('need.index');
    }

}
