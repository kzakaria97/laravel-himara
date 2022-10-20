@extends('layouts.app')
@section('content')

<form action="{{ route('updateServiceheader',$edit->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
<h2>edit title and subtitle of service header</h2>
<input type="text" name="title" id="" placeholder="title" value="{{$edit->title}}">
<input type="text" name="subtitle" id="" placeholder="subtitle" value="{{$edit->subtitle}}">
<input type="submit" value="update">
</form>

@endsection