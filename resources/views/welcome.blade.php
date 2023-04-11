@extends('layouts.app')

@section('content')

<div class="container">
    <h1>movies</h1>
    @forelse($movies as $movie)
    <div>

    </div>
    @empty

    @endforelse
</div>

@endsection