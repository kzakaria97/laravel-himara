@extends('layouts.app')
@section('content')

<form action="{{ route('updateCategorieGallerie',$editCategorieGallerie->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
<h2>edit title and subtitle of restaurant</h2>
<input type="text" name="name" id="" placeholder="title" value="{{$editCategorieGallerie->name}}">
<input type="submit" value="update">
</form>

@endsection