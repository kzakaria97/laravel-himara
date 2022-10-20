@extends('layouts.app')
@section('content')
<h1>Gallerie setting</h1>

<form action="/storeGallerie" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="url" id="">
    <input type="text" name="namePhoto" id="" placeholder="enter a name picture">
    <select name="categallerie_id">
        @foreach ($cate as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select> 
    <input type="submit" value="submit">
</form>
<br>
@foreach ($gallerie as $item)
<br>
<img src="{{asset('storage/img/'. $item->url)}}" alt="">
<h2>{{$item->namePhoto}}</h2>
    <h2>{{$item->name}}</h2>
    <a href="/{{ $item->id}}/editGallerie">Edit</a>
    <form action="/{{$item->id}}/deleteGallerie" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE</button>
    </form>
    <br>
    <hr>
@endforeach

@endsection