<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegistrationPage(){
        return view('registration');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email:dns|unique:users',
            'password'=>'required|min:6|max:255',
            'gender'=>'required|in:Male,Female',
            'dateofbirth'=>'required|date'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        $request->session()->flash('success','Registrasi Berhasil! Silahkan login!');
        return redirect('/login');
    }
}
