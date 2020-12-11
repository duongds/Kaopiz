<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempController extends Controller
{
    public function temp(Request $request)
    {
        //dd($request->method());
        //return view('temp',['title' =>'duong']);
        //return response('Hello')->cookie('name','value',10);
        //return redirect()->route('home');
        return redirect()->route('test')-> with('key','value');
    }
}
