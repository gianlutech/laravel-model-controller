@extends('layouts.main')

@section('content')

<div class="d-flex flex-wrap justify-content-center">
@forelse($movies as $movie) 
<div class="card m-3 w-25">
  <div class="card-body">
    <h5 class="card-title">{{ $movie->title}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title}}</h6>
    <p class="card-text">{{ $movie->nationality}}</p>
    <p class="card-text">{{ $movie->date}}</p>
    <p class="card-text">{{ $movie->vote}}</p>
  </div>
</div>
    @empty
    <h2>NON CI SONO FILM</h2>
    @endforelse
</div>
@endsection