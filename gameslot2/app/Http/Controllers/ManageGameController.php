<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManageGameController extends Controller
{
    public function showAddGame(){
        $value=1;
        $genre = Genre::all();
        $games = Game::all();
        return view('addgame',compact('genre','games','value'));
    }
    public function create(Request $request){
       $request->validate([
            'gametitle'=>'required|max:255',
            'gameimage'=>'required|image',
            'description'=>'required',
            'price'=>'required',
            'genre_id'=>'required',
            'pegirating'=>'required'
        ],[
            'gametitle.required'=>'Nama game tidak boleh kosong!',
            'gameimage.required'=>'Foto game tidak boleh kosong!',
            'description.required'=>'Deskripsi game tidak boleh kosong!',
            'price.required'=>'Harga game tidak boleh kosong!',
            'genre_id.required'=>'Nama genre game tidak boleh kosong!',
            'pegirating.required'=>'Rating game tidak boleh kosong!'
        ]);

       $data = $request->all();
       $data['gameimage'] = $request->file('gameimage');
       $imageName = time().'.'.$data['gameimage']->getClientOriginalExtension();
       Storage::putFileAs('public/images',$data['gameimage'],$imageName);
       $data['gameimage']='storage/images/'.$imageName;
       Game::create($data);
        $request->session()->flash('addgamesuccess','Game berhasil ditambahkan!');
       return redirect('/managegame');

    }

    public function editgame(Game $editgame){
        $games = Game::all();
        $genre = Genre::all();
        return view('editgame',[
            'editgame'=>$editgame
        ],compact('games','genre'));
    }

    public function updategame(Request $request, Game $updategame){
        $request->validate([
            'gametitle'=>'required|max:255',
            'gameimage'=>'image',
            'description'=>'required',
            'price'=>'required',
            'genre_id'=>'required',
            'pegirating'=>'required'
        ],[
            'gametitle.required'=>'Nama game tidak boleh kosong!',
            'description.required'=>'Deskripsi game tidak boleh kosong!',
            'price.required'=>'Harga game tidak boleh kosong!',
            'genre_id.required'=>'Nama genre game tidak boleh kosong!',
            'pegirating.required'=>'Rating game tidak boleh kosong!'
        ]);

        $data = $request->all();

        if($request->file('gameimage')){
            $imagename2=str_replace("storage/","","$updategame->gameimage");
            Storage::delete('public/'.$imagename2);
            $imageName = time().'.'.$data['gameimage']->getClientOriginalExtension();
            Storage::putFileAs('public/images',$data['gameimage'],$imageName);
            $data['gameimage']='storage/images/'.$imageName;
        }
        else{
            $data['gameimage']=$updategame->gameimage;
        }

        $updategame->update($data);
        $request->session()->flash('updategamesuccess','Game berhasil diupdate!');
        return redirect('/managegame');

    }

    public function deletegame(Game $deletegame){
        $imagename2=str_replace("storage/","","$deletegame->gameimage");
        Storage::delete('public/'.$imagename2);

        $deletegame->delete();
        return redirect('/managegame');
    }
    public function editgenre(Genre $editgenre){
        return view('editgenre',[
            'editgenre'=>$editgenre
        ]);
    }

    public function updategenre(Request $request, Genre $updategenre){
        $request->validate([
            'genrename'=>'required|max:255'
        ],[
            'genrename.required'=>'Nama genre tidak boleh kosong!'
        ]);

        $data = $request->all();
        $updategenre->update($data);
        $request->session()->flash('updategenresuccess','Genre berhasil diupdate!');
        return redirect('/managegenre');

    }
}
