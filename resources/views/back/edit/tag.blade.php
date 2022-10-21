@extends('layouts.app')
@section('content')

<form action="{{ route('updateTag',$edit->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')

<input type="text" name="name" value="{{$edit->name}}" id="">
<input type="submit" value="update">
</form>

@endsection