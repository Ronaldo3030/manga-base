<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('user.login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => [
                'email',
                'required'
            ],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended();
        }else{
            return redirect()->back()->with('erro', 'Usuário ou senha invalidos.');
        }
    }
}
