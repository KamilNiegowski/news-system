@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 pt-2">
        <div class="row">
          <div class="col-8">
            <h1 class="display-one">NEWS!</h1>
            <p>Enjoy reading our news. Click on a news to read!</p>
          </div>
          <div class="col-4">
            <p>Create new news</p>
            <a href="news/create/news" class="btn btn-primary btn-sm">Add news</a>
          </div>
          <div class="col-4">
            <p>Najefektywniejsi autorzy</p>
            <a href="top-authors" class="btn btn-primary btn-sm">Top Autorzy</a>
          </div>
        </div>
        @forelse($posts as $post)
          <ul>
            <li><a href="./news/{{ $post->id }}">{{ ucfirst($post->title) }}</a></li>
          </ul>
        @empty
          <p class="text-warning">No news available</p>
        @endforelse
      </div>
    </div>
  </div>
@endsection