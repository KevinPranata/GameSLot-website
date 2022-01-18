@extends('layout')
@section('title')
@section('content')
    <h2 class="d-flex justify-content-center mt-4">Edit game</h2>
    <div class="container p-2 w-50">
        <form method="POST" action="{{route('games.update',$editgame->id)}}" class="form" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group p-2">
                <label for="gametitle" class="form-label fw-bold">Game Title</label>
                <input type="text" class="form-control" id="gametitle" name="gametitle" value="{{$editgame->gametitle}}">
                @error('gametitle')
                <small class="error text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group p-2">
                <label for="gameimage" class="form-label fw-bold">Game Image</label>
                <div class="p-2">
                <img src="{{$editgame->gameimage}}" width="75" height="75" class="rounded-circle" alt="{{$editgame->gameimage}}">
                </div>
                <input type="file" class="form-input-file d-flex justify-content-end" id="gameimage" name="gameimage">
                @error('gameimage')
                <small class="error text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group p-2">
                <label for="description" class="form-label fw-bold">Description</label>
                <textarea name="description" id="description" cols="20" rows="5" class="form-control">{{$editgame->description}}</textarea>
                @error('description')
                <small class="error text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group p-2">
                <label for="price" class="form-label fw-bold">Price</label>
                <input type="number" class="form-control bg-muted" id="price" name="price" value="{{$editgame->price}}">
                @error('price')
                <small class="error text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group p-2">
                <label for="genrename" class="form-label fw-bold">Genre</label>
                <select class="form-select" aria-label="Default select example" id="genre_id" name="genre_id">
                    <option selected>Choose the genre</option>
                    @foreach($genre as $ge)
                        <option value="{{$ge->id}}">{{$ge->genrename}}</option>
                    @endforeach
                </select>
                @error('genre_id')
                <small class="error text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group p-2">
                <label for="pegirating" class="form-label fw-bold">PEGI Rating</label>
                <select class="form-select" aria-label="Default select example" id="pegirating" name="pegirating">
                    <option selected>Choose the PEGI rating</option>
                    <option value="1">0</option>
                    <option value="3">3</option>
                    <option value="7">7</option>
                    <option value="12">12</option>
                    <option value="16">16</option>
                    <option value="18">18</option>
                </select>
                @error('pegirating')
                <small class="error text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group-button p-3 d-flex justify-content-end">
                <button type="submit" class="form-button btn-primary rounded-pill px-3 py-2">Edit</button>
            </div>
        </form></div>
    <footer class="mt-auto bg-info d-flex justify-content-center fw-bold text-white p-4">All Right Reserved EldwinAnthony - KevinPranata</footer>
@endsection


