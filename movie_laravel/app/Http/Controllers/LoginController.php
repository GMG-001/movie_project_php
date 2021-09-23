<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin(){
        return view('user.login');
    }
    public function user_login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->except(['_token']);
        if (Auth::attempt($credentials)){
            return redirect()->route('movie.all');
        }else{
            return redirect()->back();
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('movie.all');
    }
    public function registration(){
        return view('user.registration');
    }
    public function registration_save(Request $request){
        $request->validate([
            'name'=>'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user=new User($request->all());
        $user->password=bcrypt($request->input('password'));
        $user->save();
        return redirect()->route('user.login');
    }
}
