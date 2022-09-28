<?php

namespace App\Http\Controllers\Admin;

use App\Models\Join;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserStoreRequest;
use App\Mail\Join\UserRegistration;
use Illuminate\Support\Facades\Mail;

class CreateController extends Controller
{
    public function CreateById($id)
    {
        $join = Join::find($id);

        return view('admin.joins.create', compact('join'));
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

}
