@extends('base')

@section('content')
<div class="container">
  <h1 class="text-center mt-5">Poster un nouvel article</h1>
  <form action="{{ route('article.store') }}" method="post">
    @csrf
    <div class="col-12 my-1">
      <div class="form-group">
        <label>Titre</label>
        <input type="text" name="title" class="form-control" placeholder="Titre de votre article">
        @error('title')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
    </div>
    <div class="col-12 my-1">
      <div class="form-group">
        <label>Sous-titre</label>
        <input type="text" name="subtitle" class="form-control" placeholder="Sous-titre de votre article">
        @error('subtitle')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>
    <div class="col-12 my-1">
      <div class="form-group">
        <label>Contenu</label>
        <textarea name="content" class="form-control w-100"></textarea>
        @error('content')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror        
      </div>
    </div>
    <div class="d-flex justify-content-center mb-5">
      <button type="submit" class="btn btn-primary">Poster l'article</button>
    </div>
  </form>
</div>
@endsection