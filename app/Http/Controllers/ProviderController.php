<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProviderController extends Controller
{


    /**
     * Store a new Provider.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function store(Request $request){

        $data = $request->all();
        return view('teste',compact('data'));
    }
}
