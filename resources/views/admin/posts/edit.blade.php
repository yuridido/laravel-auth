@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('posts.update', $post->id )}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <img src="{{  asset('storage/'. $post->img) }}" width="300px" alt="{{$post->slug}}">

            <div class="form-group">
                <div class="form-group">
                    <label for="img">Uploda image</label>
                    <input type="file" name="img" class="form-control-file" id="img" accept="image/*">
                </div>
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="body">Testo</label>
                <textarea class="form-control" id="body" name="body" rows="5">{{ $post->body }}</textarea>
            </div>
            <div class="form-group">
                @foreach ($tags as $tag)
                <label for="tag">{{ $tag->name }}</label>
                <input type="checkbox" name="tags[]" value="{{ $tag->id }}" {{ ($post->tags->contains($tag->id)) ? "checked" : "" }}>
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </div>
@endsection
