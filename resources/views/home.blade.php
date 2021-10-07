@extends('layouts.main')

@section('content')
<section id="movies" class="container py-5">
    @forelse($movies as $movie)
        <h2>{{$movie->title}} | {{$movie->original_title}}</h2> 
        <div>Nationality: {{$movie->nationality}}</div>
        <time>Release date: {{$movie->date}}</time>
        <div>Vote: {{$movie->vote}}</div>
        @if(!$loop->last)
        <hr>
        @endif
    @empty
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
          Non è presente nessun film
        </div>
      </div>
    @endforelse
    
</section>
@endsection