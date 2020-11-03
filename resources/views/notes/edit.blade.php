@extends('layouts.base')

@section('content')
    <section>
        <div class="container">
            <div class="card my-4">
                <div class="card-header d-flex justify-content-between">
                    Edit Note ({{ $note->title }})
                    <a class="btn btn-sm" href="{{ route('notebooks.show', $note->notebook_id) }}" role="button"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ route('notes.update', $note->id ) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="Title">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $note->title }}">
                        </div>
                        <div class="form-group">
                            <label for="Body">Body</label>
                            <textarea class="form-control" name="body" rows="11" style="resize: none">{{ $note->body }}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Update Note</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
