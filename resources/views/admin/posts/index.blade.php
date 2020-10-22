@extends('layouts.app')
@section('content')

@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@elseif (session('statusModifica'))
<div class="alert alert-danger">
    {{ session('statusModifica') }}
</div>
@endif
<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Edit</th>
                <th scope="col">Cancella</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td><a href="{{ route('posts.edit', $post) }}">Edit</a>  </td>
                <td>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>



@endsection
