@extends('layouts.app')
@section('content')
<h1>Tag create</h1>
<form action="/storeTag" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" id="" placeholder="name">
    <input type="submit" value="submit">
</form>
<br> <hr>
<h2>Tag created</h2> <br>
@foreach ($tag as $item)
    <h2>{{$item->name}}</h2>
    <br>
    <a href="/{{ $item->id}}/editTag">Edit</a>
    <form action="/{{$item->id}}/deleteTag" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE</button>
    </form>
    <hr>
@endforeach

@endsection