@extends('layouts.base')

@section('content')
    <section>
        <div class="container">
            <div class="card my-4">
                <div class="card-header d-flex justify-content-between">
                    {{ __('Create New Notebook') }}
                    <a class="btn btn-sm" href="{{ route('notebooks.index') }}" role="button"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ route('notebooks.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="notebook-name">Notebook Name</label>
                            <input type="text" class="form-control" name="name" aria-describedby="helpId">
                            <small id="helpId" class="form-text text-muted">Provide a new Notebook Name e.g October 20, 2020 => The day nigeria massacare her people.</small>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Create Notebook</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
