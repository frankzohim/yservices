<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function cookies(Request $request){
        session()->put('nos-cookies', true);
        return redirect()->route('homepage');
    }
}
