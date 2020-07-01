<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function RegisView(){
        return view('form');
    }

    public function WelcomePost(Request $req){
        //dd($req->all());
        $fname = $req['fname'];
        $lname = $req['lname'];
        return view('greeting', ['fname'=>$fname, 'lname'=>$lname]);
    }
}
