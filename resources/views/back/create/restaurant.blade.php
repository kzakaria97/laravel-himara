@extends('layouts.app')
@section('content')
<h1>Restaurant</h1>

<form action="/storeRestaurant" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="title" id="" placeholder="title">
    <input type="text" name="subtitle" id="" placeholder="subtitle">
    <input type="text" name="plat" id="" placeholder="meal name">
    <textarea name="text" id="" cols="10" rows="5">descrition of the meal</textarea>
    <input type="file" name="img" id="">
    <input type="number" name="price" placeholder="price" id=""> 
    <input type="submit" value="submit">
</form>
<br> <br>
<h2>Name of title ('restaurant')</h2>
@foreach ($restaurant as $item)
    <h2>{{$item->title}}</h2> <br>
    <h2>{{$item->subtitle}}</h2> <br>
    <hr><hr>
    <p>
        {{$item->plat}} <br>
        {{$item->text}} <br>
        {{$item->price}}
    </p>
    <img src="{{asset('storage/img/'. $item->img)}}" alt="">
    {{$item->img}} <br>
    <a href="/{{ $item->id}}/editRestaurant">Edit</a>
    <form action="/{{$item->id}}/deleteRestaurant" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE</button>
    </form>
@endforeach


@endsection