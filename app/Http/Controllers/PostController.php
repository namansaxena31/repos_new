<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function view(){
        return view('form');
    }

    public function post(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required'
            ]
            );
        
        echo "<pre>";
        print_r($request->all());
    }
}
