<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\need;

class DashboardController extends Controller
{
    public function index(){
        $needs = need::all();

		return view('dashboard', compact('needs'));
    }
}
