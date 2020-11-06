@extends('layouts.base')

@section('content')
    <section>
        <div class="container">
            <div class="card my-4">
                <div class="card-header d-flex justify-content-between">
                    {{ __('Create New Note') }}
                    <a class="btn btn-sm" href="{{ route('notebooks.show', $notebook->id) }}" role="button"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ route('notes.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="notebook_id" value="{{ $notebook->id }}">
                        </div>
                        <div class="form-group">
                            <label for="Title">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Body">Body</label>
                            <textarea class="form-control @error('body') is-invalid @enderror" name="body" rows="11" style="resize: none"></textarea>
                            @error('body')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Create Note</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
