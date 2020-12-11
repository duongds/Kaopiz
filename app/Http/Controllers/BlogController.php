<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('bt2_buoi2',['title'=>'BlogDuong']);
    }
}
