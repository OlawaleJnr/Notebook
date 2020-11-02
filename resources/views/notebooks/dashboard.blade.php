@extends('layouts.base')

@section('content')
    <!-- Notebook -->
    <section id="notebook-description">
        <div class="container">
            <div class="card my-4">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Welcome, <span class="font-weight-bold">{{Auth::user()->name}}</span></p>

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="notebook-left">
                        <img src="{{ asset('assets/images/notebook_banner_display.png') }}" class="img-fluid" alt="notebook_banner">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="notebook-right">
                        <h1>Notebook</h1>
                        <p>Store and Organize your thoughts in notebook and Notebook web app makes it more easier</p>
                    </div>
                    <br>
                    <a class="btn btn-outline-dark btn-lg notebook-btn" href="{{ route('notebooks.index') }}">Your Notebook</a>
                </div>
            </div>
        </div>
    </section>
@endsection
