@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 pt-2">
        <a href="/news" class="btn btn-outline-primary btn-sm">Go back</a>
        <h2>Najaktywniejsi autorzy:</h2>
        <ul>
          @foreach($authors as $author)
            <li>{{ $author->name }} ({{ $author->post_count }} wpisów)</li>
          @endforeach
        </ul>

      </div>
    </div>
  </div>
@endsection