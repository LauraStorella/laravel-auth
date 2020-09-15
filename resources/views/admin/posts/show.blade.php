@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-12">
        <h1>{{ $post->title }}</h1>
        <h4>Autore: {{ $post->user->name}}</h4>
        <p>Pubblicato il: {{ $post->created_at->format('d-m-Y') }}</p>
        <img src="{{ $post->image_url }}" alt="{{ $post->title}}">
        <p>{{ $post->content}}</p>
        </div>

        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary btn-lg">Homepage</a>
      </div>
    </div>
@endsection