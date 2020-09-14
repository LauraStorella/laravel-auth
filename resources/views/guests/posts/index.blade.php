@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Benvenuto! Questa è la lista dei post</h1>

          <ul>
            @foreach ($posts as $post)
              <li><strong>Titolo:</strong> {{ $post->title}}</li>
              <br>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
@endsection

