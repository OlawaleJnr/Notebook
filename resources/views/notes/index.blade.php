@extends('layouts.base')

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="row pt-4">
                    <div class="col-md-8">
                        <h1 class="font-weight-bold">Your Notes</h1>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-primary float-right" href="{{ route('notes.createNote', $notebook->id) }}" role="button">New Note <i class="fas fa-plus-circle ml-2"></i></a>
                    </div>
                </div>

                <!-- Notes Details -->
                <section class="py-4">
                    @forelse($notes as $note)
                        <div class="alert alert-primary" role="alert">
                            <h3 class="alert-heading FiraSans text-dark">{{ $note->title }}</h3>
                            <p>{{ $note->body }}</p>
                            <p class="mb-0 text-dark"><i class="fas fa-clock"></i> {{ $note->created_at}}</p>
                            <div class="row pt-4">
                                <div class="col-md-8 col-9">
                                    <a class="btn btn-primary" href="{{ route('notes.edit', $note->id) }}" role="button">Edit Note</a>
                                    <form action="{{ route('notes.destroy', $note->id) }}" method="post" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete Note</button>
                                    </form>
                                </div>
                                <div class="col-md-4 col-3">
                                    <a name="" id="" class="btn btn-primary float-right" href="#" role="button">Read Note</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <section class="text-center mt-5">
                            <i class="fas fa-book fa-5x text-secondary"></i>
                            <p class="mt-4">No notes have been created for this notebook</p>
                        </section>
                    @endforelse
                </section>
            </div>
        </section>
    </main>
@endsection

