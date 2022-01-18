@extends('layout')
@section('title')
@section('content')
    <form action="/registration" method="post" class="w-25 m-auto pt-5 ps-5">
        {{csrf_field()}}
        <h2 class="d-flex justify-content-center">Fill This Form</h2>
        <div class="form-group">
            Name
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Input Name" required value="{{old('name')}}">
            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            Email Address
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" aria-describedby="emailHelp" placeholder="example@mail.com" required value="{{old('email')}}">
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            Password
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
            @error('password')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        Gender
        <br>
        <div class="form-check form-check-inline" >
            <input class="form-check-input" type="radio" name="gender" value="Male">
            <label class="form-check-label" for="male">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="Female">
            <label class="form-check-label" for="female">Female</label>
        </div>
        <div class="form-group">
            Date of Birth
            <input type="text" name="dateofbirth" class="form-control @error('dateofbirth') is-invalid @enderror" placeholder="YYYY-MM-DD" required value="{{old('dateofbirth')}}">
            @error('dateofbirth')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="d-flex flex-column justify-content-center pt-5">
            <button type="submit" class="btn btn-outline-primary">Register</button>
        </div>
        <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login Now!</a></small>
    </form>
    <footer class="mt-auto bg-info d-flex justify-content-center fw-bold text-white p-4">All Right Reserved EldwinAnthony - KevinPranata</footer>



@endsection
