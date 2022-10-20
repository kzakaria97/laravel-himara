@extends('layouts.app')
@section('content')

<form action="{{ route('updateTopBar',$edit->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')

<input type="text" name="name" value="{{$edit->name}}" id="">
<input type="text" name="phone" value="{{$edit->phone}}" id="">
<input type="text" name="email" value="{{$edit->email}}" id="">
<input type="submit" value="update">
</form>

@endsection