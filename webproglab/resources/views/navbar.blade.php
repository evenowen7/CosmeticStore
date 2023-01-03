<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('title')</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(208, 208, 200)">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/category">Category</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="/profile/{id}" >Profile</a>
                    </li> --}}
                    @if (Auth::user()->role == 'admin')
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="/add">Admin</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="/add">Manage Product</a>
                        </li>

                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="/profile" >Profile</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/cart" >Cart</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/history" >History</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>

                @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<body>
    @yield('content')
</body>

</html>
