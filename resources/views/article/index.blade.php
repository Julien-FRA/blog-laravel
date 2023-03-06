@extends('base')

@section('content')
<div class="row">
  <div class="col-8 m-auto">
    <h1 class="text-center my-3">Articles</h1>
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
        <td>{{$article->created_at}}</td>
        <td>
          <a href="#" class="btn btn-warning mx-1 p-1">Editer</a>
          <a href="#" class="btn btn-danger mx-1 p-1">Supprimer</a>
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