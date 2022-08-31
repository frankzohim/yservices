<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Need;

class DashboardController extends Controller
{
    public function index(){
        $needs = Need::all();

		return view('dashboard', compact('needs'));
    }
}
