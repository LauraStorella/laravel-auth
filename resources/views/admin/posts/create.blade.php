@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-12">
        <h1>Crea un nuovo post</h1>

        <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('POST')
            <div>
              <label>Titolo</label>
              <input type="text" name="title" value="{{ old('title') }}">
            </div>

            <div>
              <label>Immagine Post</label>
              <input type="file" name="image_url" accept="image/*">
            </div>
            
            <div>
              <label>Testo</label>
              <textarea name="content" cols="50" rows="10">{{ old('content') }}</textarea>
            </div>

            <div>
              <input type="submit" value="Salva Post">
            </div>
            
        </form>
        </div>
      </div>
    </div>
@endsection