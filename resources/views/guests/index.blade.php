@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    @foreach ($posts as $post)
        <div class="card col-sm-4 pt-3">
            <img src="{{ Storage::url($post->img) }}" class="card-img-top" alt="{{ $post->slug }}">
            <div class="card-body">
                <h5 class="card-title"><span class="pl-2 pr-2 bg-dark text-white">{{ $post->title }}</span></h5>
                <p class="card-text">{{ Str::substr($post->body, 0, 150) }}...</p>
                <p class="card-text"><small class="text-muted">{{ $post->user->name }}</small></p>
                <p class="card-text"><small class="text-muted">aggiornato al: {{ $post->updated_at }}</small></p>
                <a class="btn btn-info" href="{{route('posts.guest.show', $post->slug)}}">Read more...</a>
            </div>
        </div>

    @endforeach
    </div>
</div>
@endsection
