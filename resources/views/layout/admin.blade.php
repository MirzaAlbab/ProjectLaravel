<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Viga&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Ubuntu&display=swap');
    </style>
    <!-- My CSS -->
    <link rel="stylesheet" href="../css/styleadmin.css">
    <script src="https://kit.fontawesome.com/120b825bba.js" crossorigin="anonymous"></script>

    <title>@yield('title')</title>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">Selamat datang Admin</a>
        
        <!-- <div class="icon d-flex justify-content-end">
          <h5>
            <i class="fas fa-envelope me-3" data-toggle="tooltip" title="Inbox"></i>
            <i class="fas fa-bell me-3" data-toggle="tooltip" title="Notification"></i>
          </h5>
        </div>
      </div> -->
      <div>
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{('Register') }}</a>
                </li>
            @endif
          
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->nama }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        {{('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
      </div>
    </nav>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-item nav-link active" href="#">Dashboard</a>
            <a class="nav-item nav-link" href="#">User</a>
            <a class="nav-item nav-link" href="#">Doctor</a>
            <a class="nav-item nav-link" href="#">Spotlight</a>
          </div>
        </div>
        </div> -->
        


    <div class="row no-gutters mt-5">
      <div class="col-md-2 mt-2 pt-4 pe-2 sidebar">
        <ul class="nav flex-column ms-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="/admin"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/user"><i class="fas fa-users me-2"></i>Users</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/doctor"><i class="fas fa-user-md me-2"></i>Doctors</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/article"><i class="fas fa-newspaper me-2"></i>Article</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"></a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"></a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"></a><hr class="bg-secondary">
          </li><li class="nav-item">
            <a class="nav-link text-white" href="#"></a><hr class="bg-secondary">
          </li><li class="nav-item">
            <a class="nav-link text-white" href="#"></a><hr class="bg-secondary">
          </li>
        </ul>
      </div>
      @yield('container')
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>