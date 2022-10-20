@extends('layouts.app')
@section('content')
<h1>Slider form</h1>
<br>

<form action="/storeSlider" method="POST" enctype="multipart/form-data">
    @csrf
    <h2>mandatory parameter</h2>
    <input type="text" name="title" id="" placeholder="title">
    <input type="text" name="subtitle" id="" placeholder="subtitle">
    <br> <br>
    <h2>Optional parameter</h2>
    <input type="text" name="hotelname" id="" placeholder="hotel name">
    <input type="number" name="star" id="" placeholder="number of stars (max5)">
    <label for="url">carousel picture</label>
    <input type="file" name="url" id=""><br><br>
    <input type="text" name="btnfirst" placeholder="btn descrition" id=""> 
    <input type="text" name="btnsecond" placeholder="btn descrition" id=""> <br>
    <input type="submit" value="submit">
</form>
<br> <hr>
<h2>sliders create</h2> <br>
@foreach ($slider as $item)
    <h2>{{$item->title}}</h2>
    <h2>{{$item->subtitle}}</h2> 
    <p>
        {{$item->star}} <br>
        {{$item->hotelname}} <br>
        {{$item->btnfirst}} <br>
        {{$item->btnsecond}}
    </p>
    <img src="{{asset('storage/img/'. $item->url)}}" alt=""> <br>
    <a href="/{{ $item->id}}/editSlider">Edit</a>
    <form action="/{{$item->id}}/deleteSlider" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE</button>
    </form>
    <hr>
@endforeach


@endsection