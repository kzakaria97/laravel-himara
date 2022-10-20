@extends('layouts.app')
@section('content')

<form action="{{ route('updateSlider',$edit->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
<h2>optional parameter</h2>
<input type="number" name="star" id="" placeholder="number of star (max 5)" value="{{$edit->star}}">
<input type="text" name="hotelname" id="" placeholder="hotelname" value="{{$edit->hotelname}}">
<input type="text" name="btnfirst" id="" placeholder="btn description" value="{{$edit->btnfirst}}">
<input type="text" name="btnsecond" id="" placeholder="btn description" value="{{$edit->btnsecond}}">
<br>
<h2>mandatory parameter</h2>
<input type="file" name="url" id="" value="{{$edit->url}}">
<input type="text" name="title" id="" placeholder="title" value="{{$edit->title}}">
<input type="text" name="subtitle" id="" placeholder="subtitle" value="{{$edit->subtitle}}">
<input type="submit" value="update">
</form>

@endsection