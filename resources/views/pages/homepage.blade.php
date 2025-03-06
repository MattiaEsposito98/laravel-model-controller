@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-3 m-2">
                <div class="card border border-primary h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }}</h6>
                        <p class="card-text">{{ $movie->nationality }}</p>
                        <p class="card-text"> {{ $movie->date }}</p>
                        <div class="card-footer mb-0 bg-info-subtle">
                            @for ($i = 0; $i < floor($movie->vote); $i++)
                                <i class="bi bi-star-fill" style="color: blue"></i>
                            @endfor
                            ({{ $movie->vote }})
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
