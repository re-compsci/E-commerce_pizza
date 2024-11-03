<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
 
    <style>
    nav{background-color:#F1E4C3;}
    </style>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/fe718ebe44.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body >
    <div id="app">
        <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                     <a class="navbar-brand text-white font-monospace" href="{{route('welcome')}}"> <img src="/imgs/pizza.png" width="180" height="46" alt="logo"> </a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                     
                      <div>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                              <a class="nav-link text-white" href="{{route('out')}}">
                                <i class="bi bi-basket-fill text-dark"></i>
                                <span class="badge bg-danger ">{{Session::get('countItem')}}</span>
                              </a>
                            </li>
                            @if(Auth::guest())
                  
                        <li class="nav-item">
                            <a class="nav-link active " aria-current="page" href="{{route('login')}}"><strong>Login</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}"><strong>Register</strong></a>
                        </li>
                @else
                        <li class="nav-item">
                        <a class="nav-link " href="{{route('logout')}}"><strong>Logout</strong></a>
                        </li>
                   </ul>
                   @endif
                      </div>
                    </div>
                  </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
