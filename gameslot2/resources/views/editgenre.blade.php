@extends('layout')
@section('title','home')
@section('content')
    <h2 class="d-flex justify-content-center mt-4">Edit genre name</h2>
    <div class="container p-2 w-50">
        <form method="POST" action="{{route('genres.update',$editgenre->id)}}" class="form" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group p-2">
                <label for="gametitle" class="form-label fw-bold">Genre name</label>
                <input type="text" class="form-control" id="genrename" name="genrename" value="{{$editgenre->genrename}}">
                @error('genrename')
                <small class="error text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group-button p-3 d-flex justify-content-end">
                <button type="submit" class="form-button btn-primary rounded-pill px-3 py-2">Edit</button>
            </div>
        </form>
    </div>
    <footer class="mt-auto bg-info d-flex justify-content-center fw-bold text-white p-4">All Right Reserved EldwinAnthony - KevinPranata</footer>
@endsection
