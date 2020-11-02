@extends('layouts.base')

@section('content')
    <section>
        <div class="container">
            <div class="card my-4">
                <div class="card-header d-flex justify-content-between">
                    Edit Notebook ({{ $notebook->name }})
                    <a class="btn btn-sm" href="{{ route('notebooks.index') }}" role="button"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ route('notebooks.update', $notebook->id ) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="notebook-name">Notebook Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $notebook->name }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Update Notebook</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
