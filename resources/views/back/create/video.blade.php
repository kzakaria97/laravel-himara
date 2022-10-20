@extends('layouts.app')
@section('content')
<h1>Video</h1>
<form action="/storeVideo" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="name" id="" placeholder="name">
    <input type="submit" value="submit">
</form>
<br> <br>
@foreach ($video as $item)

<p>
    {{$item->name}}
</p>
<a href="/{{ $item->id}}/editVideo">Edit</a>

    
@endforeach

@endsection