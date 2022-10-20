@extends('layouts.app')
@section('content')
<h1>About</h1>

<form action="/storeAbout" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="title" id="" placeholder="title">
    <input type="text" name="subTitle" id="" placeholder="subTitle">
    <textarea name="description" id="" cols="30" rows="10">description</textarea>
    <input type="file" name="url" id="">
    <label for="">etoile</label>
    <select name="etoile" id="">
    <option value="">1</option>    
    <option value="">2</option>    
    <option value="">3</option>    
    <option value="">4</option>    
    <option value="">5</option>    
    </select>  
    <input type="text" name="titleCard" placeholder="Title Card">
    <input type="text" name="textCard" placeholder="Text Card">
    <input type="submit" value="submit">
</form>

@endsection