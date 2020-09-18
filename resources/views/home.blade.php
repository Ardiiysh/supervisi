<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="./css/menu.css" />
    <title>Dashboard</title>
  </head>
  <!DOCTYPE html>

  <body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
      <a class="navbar-brand" href="">Supervisor Digital</a>
      @if (Auth::user()->id_level == 1)
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="material">Materi</a>
        </li>
        <li class="nav-item">
            {{-- <a class="nav-link" href="file">Upload File</a> --}}
          </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </li>
      </ul>
    @elseif (Auth::user()->id_level == 2)
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="teacher">Guru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="schedule">Jadwal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="materi">Materi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
           {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
        </li>
      </ul>
      @elseif (Auth::user()->id_level == 3)
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/home">Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </li>
      </ul>
      @elseif (Auth::user()->id_level == 4)
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a class="nav-link" href="teacher">Guru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="material">Materi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </li>
      </ul>
      @elseif (Auth::user()->id_level == 5)
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="teacher">Guru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="schedule">Schedule</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="material">Materi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </li>
      </ul>
      @endif
      {{-- <form class="form-inline my-2 my-lg-0" action="">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" />
        <button class="btn btn-success" type="submit">Search</button>
      </form> --}}
    </nav>
    <div class="container-fluid" style="margin-top: 80px;">
      <div style="padding-top: 10px;">
        @yield('content')
      </div>
    </div>


    {{-- <div class="container-fluid" style="margin-top: 80px;">
      <div class="alert alert-info">
        <strong>Info!</strong> Tampilan role lain berbeda beda sesuai dengan
        fungsinya masing masing.
      </div>
      <div style="z-index: -1; position: fixed;"></div>

      
        
      {{-- <div id="card" hidden>
        <div id="card-content">
          <div id="card-title">
            <h2>Log out</h2>
            <div class="underline-title"></div>
          </div>
          <form method="post" class="form">
            <p class="text-center font-weight-bold">Yakin Ingin Keluar?</p>

            <div class="form-border"></div>
            <div class="text-center">
              <button
                type="button"
                class="btn btn-danger"
                id="keluar"
                onclick="keluar()"
              >
                YA
              </button>
              <button
                type="button"
                class="btn btn-primary"
                id="masuk"
                onclick="stay()"
              >
                TIDAK
              </button>
            </div>
          </form>
        </div>
      </div> --}}
    {{-- </div> --}}
  </body>
  <script type="text/javascript">
    document.getElementById("keluar").onclick = function () {
      location.href = "login.html";
    };
  </script>
  <script type="text/javascript">
    function stay() {
      document.getElementById("card").hidden = true;
    }
  </script>
  <script type="text/javascript">
    function logout() {
      document.getElementById("card").hidden = false;
    }
  </script>
</html>

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}