<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class Profiles extends Controller
{
    //

    function list(){
        $data= Http::get('http://localhost:5500')->JSON();

        return view('profiles',['data'=>$data]);
    }    
}
