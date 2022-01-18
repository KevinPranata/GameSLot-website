@extends('layout')
@section('title','home')
@section('content')
    @if(session()->has('addgamesuccess'))
        <div class="alert alert-success alert-dismissible fade show fw-bold" role="alert">
            {{session('addgamesuccess')}} <i class="bi bi-emoji-smile"></i>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(session()->has('updategamesuccess'))
        <div class="alert alert-success alert-dismissible fade show fw-bold" role="alert">
            {{session('updategamesuccess')}} <i class="bi bi-emoji-smile"></i>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container p-3">
        <div class="container d-flex justify-content-end mb-5 mt-4">
            <a href="/addgame" class="btn btn-primary rounded-pill px-4 py-2 fw-bold">Add new game</a>
        </div>
    <table class="table">
        <thead>
        <tr class="table-primary">
            <th scope="col" class="p-3">GAME TITLE</th>
            <th scope="col" class="p-3">PEGI RATING</th>
            <th scope="col" class="p-3">GAME GENRE</th>
            <th scope="col" class="p-3">GAME PRICE</th>
            <th scope="col" class="p-3"></th>
            <th scope="col" class="p-3"></th>
        </tr>
        </thead>
        @foreach($games as $g)
        <tbody class="table-info">
        <tr>
            <td class="p-3 fw-bold">
                <img src="{{$g->gameimage}}" width="50" height="50" class="rounded-circle" alt="{{$g->gameimage}}">
                {{$g->gametitle}}</td>
            <td class="p-3">{{$g->pegirating}}</td>
            <td class="p-3">{{$g->genre->genrename}}</td>
            <td class="p-3">Rp.{{$g->price}}</td>
            <td class="p-3">
                <a class="nav-link fw-bold" href="{{route('games.edit',$g->id)}}">Edit</a>
            </td>
            <td class="p-3">
                <form action="{{route('games.delete',$g->id)}}" class="form-delete" method="POST" onsubmit="return confirm('Are you sure to delete this game?')">
                    @csrf
                    @method('delete')
                    <button type="submit" class="form-button-secondary bg-danger text-light">Delete</button>
                </form>

            </td>
        </tr>
        </tbody>
        @endforeach
    </table>
    </div>
    <div class="d-flex justify-content-center p-1">
        {{$games->links()}}
    </div>

    <footer class="mt-auto bg-info d-flex justify-content-center fw-bold text-white p-4">All Right Reserved EldwinAnthony - KevinPranata</footer>
@endsection
