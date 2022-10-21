@extends('layouts.app')
@section('content')

<form action="{{ route('updateTeam',$edit->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')

<input type="text" name="name" value="{{$edit->name}}" id="">
<input type="text" name="poste" value="{{$edit->poste}}" id="">
<textarea name="text" id="" cols="15" rows="7">{{$edit->text}}</textarea>
<input type="file" name="url">
<input type="submit" value="update">
</form>

@endsection