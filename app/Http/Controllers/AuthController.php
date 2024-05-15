<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginPage(){
        return view('auth.login');
    }

    public function loginPost(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);


        $credentials = $request->only(['username', 'password']);

        if(Auth::attempt($credentials)){
            return redirect('/importDtr');
        }

        return redirect()->back()->withErrors(['username' => 'Invalid credentials']);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
