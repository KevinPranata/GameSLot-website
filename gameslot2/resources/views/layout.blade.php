<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script type="javascript" src="dist/js/bootstrap.js"></script>
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>@yield('title')</title>
</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container p-1">
        <a class="navbar-brand" href="/home">GameSlot</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @if(auth()->check())
                @if(auth()->user()->role == 'admin')
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/managegame">Manage Game</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/managegenre">Manage Game Genre</a>
                </li>
                    @endif
                @else
                    @if(!auth()->check())
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="/registration"><i class="bi bi-pencil-square"></i> SignUp</a>
                </li>
                    @endif
                    @if(!auth()->check())
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="/login"><i class="bi bi-box-arrow-in-right"></i> LogIn</a>
                </li>
                    @endif
                @endif

            </ul>
        </div>
        <form class="d-flex me-5 pe-5 w-50" action="{{url('/search')}}">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-light me-5" type="submit"><i class="bi bi-search"></i></button>
        </form>
            @if(auth()->check())
                <h2><i class="bi bi-cart-fill fa-5x me-3"></i></h2>
            <div class="dropdown">
                <img src="{{auth()->user()->userimage}}"width="50" height="50" class=" rounded-circle ms-2 border border-5 border-success" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item fw-bold border-bottom border-primary border-3" href="#">Hi, {{auth()->user()->name}} ({{auth()->user()->role}})</a></li>
                    <li><a class="dropdown-item pt-3" href="/edituser">Your Profile</a></li>
                    <li><a class="dropdown-item" href="#">Transaction History</a></li>
                    <li><a class="dropdown-item" href="/logout"><i class="bi bi-box-arrow-in-left"></i> Log Out</a></li>
                </ul>
            </div>
            @endif

    </div>
</nav>
@yield('content')



</body>
</html>
