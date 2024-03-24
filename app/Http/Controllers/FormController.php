<?php

namespace App\Http\Controllers;


use App\Models\Customer;
use App\Models\BlogPosts;
// use DB;

class FormController extends Controller
{
    

    function records(){
        $records=BlogPosts::all();
        $record=BlogPosts::all();
        // return $records = DB::table('customers')->get();

        return view('index',compact('records','record'));
    }
}
