@extends('layouts.app')
@section('content')

<form action="{{ route('updateService',$edit->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
<h2>edit service</h2>
<input type="text" name="title" id="" placeholder="title" value="{{$edit->title}}">
<input type="text" name="text" id="" placeholder="description" value="{{$edit->text}}">
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
<input type="file" name="url" id="" value="{{$edit->url}}">
<input type="submit" value="update">
</form>

@endsection