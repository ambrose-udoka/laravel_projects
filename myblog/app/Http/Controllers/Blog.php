<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blog extends Controller
{
    function load_index(Request $req) {
    	echo $req->method();
    return view('index');
}
}
