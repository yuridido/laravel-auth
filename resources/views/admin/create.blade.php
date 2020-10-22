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
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="body">Testo</label>
                <textarea class="form-control" id="body" name="body" rows="5"></textarea>
            </div>
            <div class="form-group">
                @foreach ($tags as $tag)
                <label for="tag">{{ $tag->name }}</label>
                <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
@endsection
