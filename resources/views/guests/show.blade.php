@extends('layouts.app')
@section('content')
    <div class="card col-sm-4 pt-3">
        <img src="{{ Storage::url($post->img) }}" class="card-img-top" alt="{{ $post->slug }}">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->body }}</p>
            {{-- <p class="card-text"><small class="text-muted">{{ $post->user->name }}</small></p> --}}
            <p class="card-text"><small class="text-muted">aggiornato al: {{ $post->updated_at }}</small></p>
        </div>
    </div>

@endsection
