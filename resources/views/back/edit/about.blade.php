@extends('layouts.app')
@section('content')

<form action="{{ route('updateAbout',$editAbout->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')

<input type="text" name="title" id="" placeholder="title" value="{{$editAbout->title}}">
<input type="text" name="subTitle" id="" placeholder="subTitle" value="{{$editAbout->subTitle}}">
<textarea name="description" id="" cols="30" rows="10">{{$editAbout->description}}</textarea>
<input type="file" name="url" id="" value="{{$editAbout->url}}">
<label for="">etoile</label>
<select name="etoile" id="">
<option value="">1</option>    
<option value="">2</option>    
<option value="">3</option>    
<option value="">4</option>    
<option value="">5</option>    
</select>  
<input type="text" name="titleCard" id="" placeholder="Tilte Card" value="{{$editAbout->titleCard}}">
<input type="text" name="textCard" id="" placeholder="text Card" value="{{$editAbout->textCard}}">
<input type="submit" value="update">
</form>

@endsection