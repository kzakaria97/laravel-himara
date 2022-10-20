@extends('layouts.app')
@section('content')

<form action="{{ route('updateRestaurant',$editRestaurant->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
<h2>edit title and subtitle of restaurant</h2>
<input type="text" name="title" id="" placeholder="title" value="{{$editRestaurant->title}}">
<input type="text" name="subtitle" id="" placeholder="subtitle" value="{{$editRestaurant->subtitle}}">
<h2>edit meals of restaurant</h2>
<input type="text" name="plat" id="" placeholder="plat" value="{{$editRestaurant->plat}}">
<textarea name="text" id="" cols="10" rows="5">{{$editRestaurant->text}}</textarea>
<input type="file" name="img" id="" value="{{$editRestaurant->img}}">
<input type="number" name="price" placeholder="price" value="{{$editRestaurant->price}}">
<input type="submit" value="update">
</form>

@endsection