<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;
use MongoDB\Driver\Session;

class UserController extends Controller
{
    public function showLoginPage(){
        return view('login');
    }
    public function login (Request $request){
        $isValid=[
        'email'=>$request->email,
        'password'=> $request->password
        ];

        if($request->remember){
            Cookie::queue('mycookie',$request->email,10080);
        }
        if(Auth::attempt($isValid,true)){
            $request->session()->flash('loginsuccess','LogIn Success, Happy Shopping!');
            return redirect('/home');
        }
        else{
            $request->session()->flash('loginfailed','LogIn Failed, Please Try Again!');
            return back();
        }
    }
    public function logout(Request $request){
        $request->session()->flash('logoutsuccess','You have successfully logged out!');
        auth()->logout();
        return redirect('/login');
    }



}
