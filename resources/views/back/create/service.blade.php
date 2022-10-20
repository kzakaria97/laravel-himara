@extends('layouts.app')
@section('content')
<h1>Service form</h1>
<br>

<form action="/storeService" method="POST" enctype="multipart/form-data">
    @csrf
    <h2>mandatory parameter</h2>
    <input type="text" name="title" id="" placeholder="title">
    <input type="text" name="text" id="" placeholder="description">
    <select name="icon" id="">
        <option value="">Restaurant</option>
        <option value="">Spa</option>
        <option value="">Swimming Pool</option>
        <option value="">Conference Room</option>
        <option value="">Cofee</option>
        <option value="">Parking</option>
        <option value="">Shower</option>
        <option value="">Soccer</option>
        <option value="">Spoon</option>
        <option value="">Subway</option>
    </select>
    <input type="file" name="url" id="">
    <input type="submit" value="submit">
</form>
<br> <hr>
<h2>sliders create</h2> <br>
@foreach ($service as $item)
    <h2>{{$item->title}}</h2>
    <h2>{{$item->text}}</h2> 
    <h2>{{$item->icon}}</h2>
    <img src="{{asset('storage/img/'. $item->url)}}" alt=""> <br>
    <a href="/{{ $item->id}}/editService">Edit</a>
    <form action="/{{$item->id}}/deleteService" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE</button>
    </form>
    <hr>
@endforeach


@endsection