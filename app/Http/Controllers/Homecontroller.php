<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    function page(Request $request){
        return view("Home");
    }
}
