@extends('layouts.base')

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="row pt-3">
                    <div class="col-md-8">
                        <h1 class="font-weight-bold">Your Notebooks</h1>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-primary float-right" href="{{ route('notebooks.create') }}" role="button">New Notebook <i class="fas fa-plus-circle ml-2"></i></a>
                    </div>
                </div>

                <!-- Notebook Info -->
                <section class="py-5">
                    <div class="row">
                        @forelse($notebooks as $notebook)
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="card-img-top" style="height: 180px;" src="{{ asset('assets/images/notebook_banner_display.png') }}" alt="Card image">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">{{$notebook->name}}</h5>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-8 col-8">
                                                <a href="{{ route('notebooks.show', $notebook->id) }}" class="btn btn-primary">View Notebook</a>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-4">
                                                <div class="d-flex justify-content-between mt-2">
                                                    <a href="{{ route('notebooks.edit', $notebook->id) }}" class="btn btn-sm"><i class="fas fa-pencil-alt text-dark"></i></a>

                                                    <form action="{{ route('notebooks.destroy', $notebook->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-sm"><i class="fas fa-trash-alt text-danger"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                    </div>
                        <section class="text-center mt-5">
                            <i class="fas fa-book fa-5x text-secondary"></i>
                            <p class="mt-4">No Created Notebook Available, Create One</p>
                        </section>
                    @endforelse
                </section>
            </div>
        </section>
    </main>
@endsection
