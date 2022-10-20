@extends('layouts.app')
@section('content')

<form action="{{ route('updateGallerie',$editGallerie->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')

<select name="categallerie_id">
    @foreach ($cate as $item)
    <option value="{{$item->id}}">{{$item->name}}</option>
    @endforeach
</select>
<input type="text" name="namePhoto" id="">
<input type="file" name="url" value="{{$editGallerie->url}}">
<input type="submit" value="update">
</form>

@endsection