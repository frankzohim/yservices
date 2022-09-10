<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Code;
use App\Models\User;
class TypeAheadController extends Controller
{
<<<<<<< HEAD
=======

    public function index()
    {
        $codes = Code::select('Commune', 'Codepos')->get();
        $i=0;
        
        foreach($codes as $code){
            $codes_array[$i] = ''.$code->Codepos.', '.$code->Commune;
            $i++;
        }
        //echo "<pre>";print_r($codes_array);
        return view('welcome',compact('codes_array'));

    }

    public function autocompleteSearch(Request $request)
    {
          $query = $request->get('query');
          $filterResult = Code::where('Codepos', 'LIKE', $query. '%')->get();
          return response()->json($filterResult);
    }

>>>>>>> refs/remotes/origin/main
    public function autocomplete(Request $request)
    {
        error_log('Some message here.');
        $res = Code::select("Codepos")
        ->where("Codepos","LIKE","%{$request->term}%")
        ->get();

        return response()->json($res);
    }

    function action(Request $request)
    {
        error_log('Some message here.');
        $data = $request->all();

        $query = $data['query'];

        $filter_data = Code::select('Codepos')
                        ->where('Codepos', 'LIKE', '%'.$query.'%')
                        ->get();

        return response()->json($filter_data);
    }
}
