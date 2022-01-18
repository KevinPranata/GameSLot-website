@extends('layout')
@section('title','home')
@section('content')



    <div class="card text-white p-5 bg-muted pt-5 mx-auto">
        <img src="{{$game->gameimage}}" class="card-img rounded-3" width="1000"height="600" alt="...">
        <div class="card-img-overlay p-5">
            <div class="container">
            <h1 class="card-title d-flex justify-content-center mt-5 px-2 py-1"style="background-color: rgba(0, 0, 0, 0.2);">{{$game->gametitle}}</h1>
            </div>
                <br>
            <br>
            <h5 class="card-text ps-4 px-3 py-2" style="background-color: rgba(0, 0, 0, 0.2)";>Genre:    {{$game->genre->genrename}}</h5>
            <p class="card-text ps-4 px-3 py-2" style="background-color: rgba(0, 0, 0, 0.2)";>{{$game->description}}</p>
        </div>
    </div>
    <div class="container d-flex justify-content-center p-5">
        <button type="button" class="btn btn-primary btn-lg px-5 py-2 fw-bold rounded-pill">Add to cart</button>
    </div>
    <footer class="mt-auto bg-info d-flex justify-content-center fw-bold text-white p-4">All Right Reserved EldwinAnthony - KevinPranata</footer>


@endsection
