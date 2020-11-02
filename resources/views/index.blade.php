<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notebook</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Notebook
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Links -->
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('notebooks.dashboard') }}">{{ __('Dashboard') }}</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Notebook -->
    <section id="notebook-description">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="notebook-left">
                        <img src="{{ asset('assets/images/notebook_banner.png') }}" class="img-fluid" alt="notebook_banner">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="notebook-right">
                        <h1>Notebook</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nisi facilis totam laborum accusamus consequuntur sed laboriosam cumque quas. Veritatis autem sed asperiores rem pariatur error similique suscipit quis non.</p>
                    </div>
                    <br>
                    <a class="btn btn-outline-dark btn-lg notebook-btn" href="">Your Notebook</a>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
