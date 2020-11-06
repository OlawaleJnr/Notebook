<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notebook</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/fonts/css/all.css') }}">
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
        <div class="container text-center pb-5">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="notebook-left">
                        <img src="{{ asset('assets/images/notebook_banner.png') }}" class="img-fluid" alt="notebook_banner">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="notebook-right">
                        <h1>Notebook</h1>
                        <p>Store and Organize your thoughts in notebook and Notebook web app makes it more easier</p>
                    </div>
                    <br>
                    <a class="btn btn-outline-dark btn-lg notebook-btn" href="">Explore Notebook World</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contribution -->
    <section id="contribution" class="py-3 text-center">
        <div class="container">
            <p class="text-white">Contribute on Laravel Notebook by clicking the below button</p>
            <a href="https://github.com/OlawaleJnr/LaravelNotebook" class="btn btn-lg btn-github btn-icon mb-3" target="_blank">
                <span class="text-white"><i class="fab fa-github"></i></span>
                <span class="text-white"><span class="text-warning">Star us</span> on Github</span>
            </a>
            <p class="text-white PoiretOne">* proudly coded by TALABI AYOMIDE - SOFTWARE ENGINEER</p>
        </div>
    </section>

    <section id="info1" class="pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="section-left">
                        <h2 class="text-center">How Laravel Notebook solve your everyday thoughts?</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus debitis animi voluptas odit doloribus ullam sed cumque facilis, aliquam laborum incidunt assumenda quibusdam in libero distinctio, veritatis rem quis exercitationem?</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="section-right">
                        <h2 class="text-center">How Laravel Notebook solve your everyday thoughts?</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus debitis animi voluptas odit doloribus ullam sed cumque facilis, aliquam laborum incidunt assumenda quibusdam in libero distinctio, veritatis rem quis exercitationem?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="p-5 bg-light">
        <p class="text-center">Notebook Copyright &copy;2020 </p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('library/scrollreveal/dist/scrollreveal.min.js') }}"></script>
    <script>
        window.sr = ScrollReveal();
        sr.reveal('.navbar', {
            duration: 3000,
            origin: 'top'
        });

        sr.reveal('.notebook-left', {
            duration: 3000,
            origin: 'left',
            distance: '350px'
        });

        sr.reveal('.notebook-right', {
            duration: 3000,
            origin: 'right',
            distance: '350px'
        });

        sr.reveal('.notebook-btn', {
            duration: 2000,
            origin: 'bottom',
            delay: 2000
        });

        sr.reveal('#contribution div', {
            duration: 3000,
            origin: 'bottom',
        });

        sr.reveal('.section-left', {
            duration: 3000,
            origin: 'top',
            distance: '350px',
        });

        sr.reveal('.section-right', {
            duration: 3000,
            origin: 'bottom',
            distance: '350px',
        });
    </script>
</body>
</html>
