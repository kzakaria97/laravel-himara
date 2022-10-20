@extends('layouts.app')
@section('content')
<h1>Service header form</h1>
<br>

<form action="/storeServiceheader" method="POST" enctype="multipart/form-data">
    @csrf
    <h2>mandatory parameter</h2>
    <input type="text" name="title" id="" placeholder="title">
    <input type="text" name="subtitle" id="" placeholder="subtitle">
    <input type="submit" value="submit">
</form>
<br> <hr>
<h2>sliders create</h2> <br>
@foreach ($serviceheader as $item)
    <h2>{{$item->title}}</h2>
    <h2>{{$item->subtitle}}</h2> 
    <a href="/{{ $item->id}}/editServiceheader">Edit</a>
    <form action="/{{$item->id}}/deleteServiceheader" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE</button>
    </form>
    <hr>
@endforeach


@endsection