@extends('base')

@section('content')
  <div class="jumbotron">
    <h2 class="display-4 text-center mt-3">{{ $article->title }}</h2>
    <h5 class="text-center my-3 pt-3">{{ $article->subtitle }}</h5>
    <div class="container">
      <p class="text-center">
        {{ $article->content }}
      </p>
    </div>
    <div class="d-flex justify-content-center my-3">
      <a href="{{ route('articles') }}" class="btn btn-primary">
      <i class="fas fa-arrow-left"></i>
      Retour
      </a>
    </div>
  </div>
@endsection