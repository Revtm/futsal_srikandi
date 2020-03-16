<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin(){
        return view('login');
    }

    public function postLogin(Request $request){
        if(!\Auth::attempt(['name'=>$request->name,'password'=>$request->password])){
            return redirect()->back();
        }

        return redirect()->route('home');

    }
}
