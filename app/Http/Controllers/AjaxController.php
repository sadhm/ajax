<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function index()
    {
        return view('index');

    }

    public function show(Request $request)
    {
        $input = $request->all();

        Log::info($input);
        $msg = "message is changed";
        return response()->json(array('msg'=> $msg), 200);
    }
}
