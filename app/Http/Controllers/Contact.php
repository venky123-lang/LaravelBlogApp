<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Contactreq; --> controller name and model name should not be same

class Contact extends Controller
{
    public function contact(){
        return view('components.contact');
    }

    public function register(Request $request){

        $request->validate([
            'username' => 'required | max:40 | string',
            'email' => 'required | max:50 | string',
            'mobile' => 'required | max:10 | numeric',
            'query' => 'required | min:3 | max:200 | string',
        ]);
        echo "<pre>";
        print_r($request->all());
    }
}
