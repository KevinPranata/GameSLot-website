@extends('layout')
@section('title','home')
@section('content')
    @if(session()->has('updategenresuccess'))
        <div class="alert alert-success alert-dismissible fade show fw-bold" role="alert">
            {{session('updategenresuccess')}} <i class="bi bi-emoji-smile"></i>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container p-4 w-50">
        <table class="table">
            <thead>
            <tr class="table-primary">
                <th scope="col" class="p-2">GAME GENRE</th>
                <th scope="col" class="p-2"></th>
            </tr>
            </thead>
            @foreach($genre as $ge)
                <tbody class="table-info">
                <tr>
                    <td class="p-2 fw-bold">{{$ge->genrename}}</td>
                    <td class="p-2 d-flex justify-content-end">
                        <a class="nav-link fw-bold" href="{{route('genres.edit',$ge->id)}}">Edit</a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
    <div class="d-flex justify-content-center">
        {{$genre->links()}}
    </div>
    <footer class="mt-auto bg-info d-flex justify-content-center fw-bold text-white p-4">All Right Reserved EldwinAnthony - KevinPranata</footer>
@endsection
