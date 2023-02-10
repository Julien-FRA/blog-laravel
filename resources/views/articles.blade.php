@extends('base')

@section('content')
  <div class="jumbotron">
    <h1 class="display-3 text-center mt-2">Liste des articles</h1>
    <div class="articles row justify-content-center container-fluid">
      @foreach ($listeArticles as $article)
        <div class="col-md-6">
          <div class="card my-2 p-2">
            <div class="card-body">
              <h5>{{ $article->title }}</h5>
              <p>{{ $article->subtitle }}</p>
              <a href="{{ route('article', $article->slug) }}" class="btn btn-primary">
                <i class="fas fa-arrow-right"></i>
                Lire la suite
              </a>
            </div>
          </div>
        </div>
      @endforeach 
    </div>
    <div class="d-flex justify-content-center mt-5">
      {{ $listeArticles->links('vendor.pagination.custom') }}
    </div>
  </div>
@endsection