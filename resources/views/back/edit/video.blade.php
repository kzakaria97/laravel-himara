@extends('layouts.app')
@section('content')

<form action="{{ route('updateVideo',$editVideo->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
<label for="">edit your video</label>
<input type="text" name="name" value="{{$editVideo->name}}" id="">
<input type="submit" value="update">
</form>

@endsection