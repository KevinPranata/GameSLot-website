@extends('layout')
@section('title')
@section('content')
    @if(session()->has('loginsuccess'))
        <div class="alert alert-success alert-dismissible fade show fw-bold" role="alert">
            {{session('loginsuccess')}} <i class="bi bi-emoji-smile"></i>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="storage/images/carousel1.jpg" width="1000"height="550" class="d-block w-100 .img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="px-2 py-1" >GameSlot</h5>
                    <p class="px-2 py-1" style="background-color: rgba(0,0,0,0.3)">Playstation games all in your hand.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="storage/images/carousel2.jpg"width="1900"height="550" class="d-block w-100 .img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="px-2 py-1" >Best game store in the town</h5>
                    <p class="px-2 py-1" style="background-color: rgba(0,0,0,0.3)">Unlimited choices of game.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="storage/images/carousel3.jpg" width="1900"height="550" class="d-block w-100 .img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="px-2 py-1" >Virtual Reality</h5>
                    <p class="px-2 py-1" style="background-color: rgba(0,0,0,0.3)">Unleash your greatest gaming experience with metaverse.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <h2 class="p-3  mt-2 d-flex justify-content-center">Our Games</h2>

    <div class="container">
        <div class="row">
            @foreach($games as $g)
                <div class="col-md-3 mb-5">
                    <div class="card">
                        <img src="{{$g->gameimage}}" width="400" height="200" class="card-img-top" alt="{{$g->gameimage}}">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center">{{$g->gametitle}}</h5>
                            <p class="card-text d-flex justify-content-center px-2 py-1 text-success" style="background-color: rgba(0, 255, 0, 0.2);">{{$g->genre->genrename}}</p>
                            <p class="card-text d-flex justify-content-center p-3">Rp.{{$g->price}}</p>
                            <a href="{{route('games.detail', $g->id)}}" class="btn btn-primary rounded-pill px-4 py-2">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="d-flex justify-content-center p-4">
        {{$games->links()}}
    </div>

    <footer class="mt-auto bg-info d-flex justify-content-center fw-bold text-white p-4">All Right Reserved EldwinAnthony - KevinPranata</footer>


@endsection

