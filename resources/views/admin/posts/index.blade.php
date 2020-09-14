
@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-12">
        <h1>Benvenuto/a {{ $user->name }}! Questa è la lista dei post</h1>
        </div>

        <ul>
          @foreach ($posts as $post)
            <li><strong>Autore:</strong> {{ $post->user->name}} - <strong>Titolo:</strong> {{ $post->title}}
              <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-primary btn-sm">Show</a>
            </li>
            <br>
          @endforeach
        </ul>
      </div>
    </div>
@endsection