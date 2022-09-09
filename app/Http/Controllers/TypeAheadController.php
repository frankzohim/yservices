<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Code;
use App\Models\User;
class TypeAheadController extends Controller
{
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