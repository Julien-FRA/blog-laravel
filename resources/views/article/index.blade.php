@extends('base')

@section('content')
<div class="row">
  <div class="col-8 m-auto">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">X</button>
          {{ $message }}
        </div>
    @endif
    <h1 class="text-center my-3">Articles</h1>
    <div class="d-flex justify-content-center">
      <a href="{{ route('article.create') }}" class="btn btn-info my-2"><i class="fas fa-plus"></i> Ajouter un nouvel article</a>
    </div>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Titre</th>
          <th scope="col">Crée le</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
    @foreach ($listArticles as $article)
      <tr class="table-secondary">
        <th>{{$article->id}}</th>
        <td>{{$article->title}}</td>
        <td>{{$article->dateFormatted()}}</td>
        <td>
          <a href="#" class="btn btn-warning mx-1 p-1">Editer</a>
          <form action={{ route('article.delete', $article->id) }} method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mx-1 p-1">Supprimer</button>
          </form>
        </td>
      </tr>
    @endforeach
      </tbody>
      </table>
      <div class="d-flex justify-content-center mt-5">
        {{ $listArticles->links('vendor.pagination.custom') }}
      </div>
  </div>
</div>
@endsection