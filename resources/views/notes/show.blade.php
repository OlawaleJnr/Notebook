@extends('layouts.base')

@section('content')
    <div class="container py-5">
        <h3>{{ $note->title }}</h3>
        <p>{{ $note->body }}</p>
    </div>
@endsection
