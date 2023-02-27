@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 pt-2">
        <a href="/news" class="btn btn-outline-primary btn-sm">Go back</a>
        <h1 class="display-one">{{ ucfirst($post->title) }}</h1>
        <p>{!! $post->content !!}</p>
        <hr>
        <a href="/news/{{ $post->id }}/edit" class="btn btn-outline-primary">Edit News</a>
        <h2> Autorzy</h2>
        @foreach ($post->authors as $author)
          <li>{{ $author->name }}</li>
        @endforeach
        <br><br>
        <form id="delete-frm" class="" action="" method="POST">
          @method('DELETE')
          @csrf
          <button class="btn btn-danger">Delete News</button>
        </form>
      </div>
    </div>
  </div>
@endsection