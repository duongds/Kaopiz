<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return 'Hello home';
    }
    public function thamso($ds=''){
        return $ds;
    }
}
