<?php

namespace App\Http\Controllers\Admin;

use App\Models\Join;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;

class CreateController extends Controller
{
    public function CreateById($id)
    {
        $join = Join::find($id);

        return view('admin.joins.create', compact('join'));
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->description,
            'role_id' =>3,
            'agency_id' =>1
        ]);

        return to_route('demandes.index');
    }

}
