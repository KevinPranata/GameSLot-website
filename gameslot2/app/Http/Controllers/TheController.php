<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TheController extends Controller
{
    public function showLayoutPage(){
        $games = Game::all();
        return view('layout',compact('games'));
    }
    public function showHomePage(){
        $games = Game::paginate(10);
        return view('home',compact('games'));
    }
    public function viewPageSearch(Request $request){
        $games = Game::where('gametitle','LIKE',"%$request->search%")->simplePaginate(10);
        return view('home')->with('games',$games);
    }
    public function detail(Game $detailgame){
        return view('detail',[
            'game'=>$detailgame
        ]);
    }
    public function showManageGamePage(){
        $games = Game::paginate(10);
        return view('managegame',compact('games'));
    }
    public function showManageGenrePage(){
        $games = Game::paginate(10);
        $genre= Genre::paginate(10);
        return view('managegenre',compact('games','genre'));
    }
    public function edituser (){
        return view('yourprofile');
    }
    public function updateuser(Request $request){
        $request->validate([
            'username'=>'required|max:255',
            'userimage'=>'required|image',
            'useremail'=>'required|email'
        ],[
            'username.required'=>'Nama tidak boleh kosong!',
            'userimage.required'=>'Foto tidak boleh kosong!',
            'useremail.required'=>'email tidak boleh kosong!'
        ]);
        $user=auth()->user();
        $user->name=$request['username'];
        if($request->file('userimage')){
            $imagename2=str_replace("storage/","","$user->userimage");
            Storage::delete('public/'.$imagename2);
            $imageName = time().'.'.$request->userimage->getClientOriginalExtension();
            Storage::putFileAs('public/userimages',$request->userimage,$imageName);
            $user->userimage='storage/userimages/'.$imageName;
        }
        else{
            $user->userimage=auth()->user()->userimage;
        }
        $user->email=$request['useremail'];
        $user->update();
        return redirect('/home');
    }

}
