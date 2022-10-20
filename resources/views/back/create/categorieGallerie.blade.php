@extends('layouts.app')
@section('content')
<h1>Categorie setting</h1>

<form action="/storeCategorieGallerie" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" id="" placeholder="catgorie name"> 
    <input type="submit" value="submit">
</form>
<br>
@foreach ($categorieGallerie as $item)
<br>
    <h2>{{$item->name}}</h2>
    <a href="/{{ $item->id}}/editCategorieGallerie">Edit</a>
    <form action="/{{$item->id}}/deleteCategorieGallerie" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE</button>
    </form>
    <br>
    <hr>
@endforeach

@endsection