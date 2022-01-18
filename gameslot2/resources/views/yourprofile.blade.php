@extends('layout')
@section('title','home')
@section('content')
    <h2 class="d-flex justify-content-center mt-4">Profile</h2>
    <div class="container p-2 w-50">
        <form method="POST" action="/updateuser" class="form" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group p-2">
                <label for="username" class="form-label fw-bold">Name</label>
                <input type="text" class="form-control" id="username" name="username" value="{{auth()->user()->name}}">
            </div>
            <div class="form-group p-2">
                <label for="userimage" class="form-label fw-bold">Photo</label>
                <div class="p-2">
                    <img src="{{auth()->user()->userimage}}" width="75" height="75" class="rounded-circle" alt="">
                </div>
                <input type="file" class="form-input-file d-flex justify-content-end" id="userimage" name="userimage">
            </div>
            <div class="form-group p-2">
                <label for="useremail" class="form-label fw-bold">Email</label>
                <input type="text" class="form-control" id="useremail" name="useremail" value="{{auth()->user()->email}}">
            </div>
            <div class="form-group p-2">
                <label for="gender" class="form-label fw-bold">Gender</label>
                <p class="text-start">{{auth()->user()->gender}}</p>
            </div>
            <div class="form-group p-2">
                <label for="dateofbirth" class="form-label fw-bold">Date of Birth</label>
                <p class="text-start">{{auth()->user()->dateofbirth}}</p>
            </div>

            <div class="form-group-button p-3 d-flex justify-content-end">
                <button type="submit" class="form-button btn-primary rounded-pill px-3 py-2">Edit</button>
            </div>
        </form></div>
    <footer class="mt-auto bg-info d-flex justify-content-center fw-bold text-white p-4">All Right Reserved EldwinAnthony - KevinPranata</footer>
@endsection
