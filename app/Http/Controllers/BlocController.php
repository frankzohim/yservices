<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlocController extends Controller
{

    public function index(){

        $articleRecents=Article::orderBy('id','DESC')
                ->take('3')
                ->get();
        $articlesCount=Article::all()->count();
        $articles=Article::all();

        return view('blocs.index',compact('articleRecents','articlesCount','articles'));
    }
}
