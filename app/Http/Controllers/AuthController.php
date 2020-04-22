<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Operator;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        if (Auth::guard('operator')->attempt(['nama' => $request->nama, 'password' => $request->password])) {
            $request->session()->put('nama', $request->nama);
            return redirect()->route('home');
        } else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::guard('operator')->logout();
        return redirect('/login');
    }
}
