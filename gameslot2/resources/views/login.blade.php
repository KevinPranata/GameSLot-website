@extends('layout')
@section('title')
@section('content')

    <form action="" method="post" class="w-25 m-auto pt-5 ps-5">
        {{csrf_field()}}
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show fw-bold" role="alert">
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session()->has('loginfailed'))
            <div class="alert alert-danger alert-dismissible fade show fw-bold" role="alert">
                {{session('loginfailed')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session()->has('logoutsuccess'))
            <div class="alert alert-success alert-dismissible fade show fw-bold" role="alert">
                {{session('logoutsuccess')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h2 class="d-flex justify-content-center p-5">Please Login</h2>
        <div class="form-group">
            Email Address
            <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="example@mail.com" value={{\Illuminate\Support\Facades\Cookie::get('mycookie')!== null ? \Illuminate\Support\Facades\Cookie::get('mycookie'):""}}>
        </div>
        <div class="form-group">
            Password
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" name="remember" id="remember" class="form-check-input" checked={{\Illuminate\Support\Facades\Cookie::get('mycookie')!==null}}>
            Remember Me
        </div>
        <div class="d-flex flex-column justify-content-center pt-4">
            <button type="submit" class="btn btn-outline-primary">Login</button>
        </div>
        <small class="d-block text-center mt-3">Not Registered? <a href="/registration">Register Now!</a></small>
    </form>
    <footer class="mt-auto bg-info d-flex justify-content-center fw-bold text-white p-4">All Right Reserved EldwinAnthony - KevinPranata</footer>


@endsection
