<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlocController extends Controller
{

    public function index(){

        return view('blocs.index');
    }
}
