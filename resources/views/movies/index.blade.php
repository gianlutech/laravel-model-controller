@extends('layouts.main')

@section('content')

<div class="d-flex">
@forelse($books as $book) 
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $movie->title}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title}}</h6>
    <p class="card-text">{{ $movie->nationality}}</p>
    <p class="card-text">{{ $movie->date}}</p>
    <p class="card-text">{{ $movie->vote}}</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
    @empty
    <h2>NON CI SONO FILM</h2>
    @endforelse
</div>
@endsection