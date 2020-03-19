<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Operator;

class AuthController extends Controller
{
    public function getLogin(){
        return view('login');
    }

    public function postLogin(Request $request){
        if (Auth::guard('operator')->attempt(['nama' => $request->nama, 'password' => $request->password])) {
            return redirect()->route('home');
        } else {
            return redirect()->back();
        }
    }
}