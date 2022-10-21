@extends('layouts.app')
@section('content')
<h1>Team create</h1>
<form action="/storeTeam" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="name" id="" placeholder="name">
    <input type="text" name="poste" id="" placeholder="poste">
    <textarea name="text" id="" cols="15" rows="7"></textarea>
    <input type="file" name="url" id="">  
    <input type="submit" value="submit">
</form>
@foreach ($team as $item)
    <h2>{{$item->name}}</h2>
    <h2>{{$item->poste}}</h2>
    <p>{{$item->text}}</p>
    <br>
    <img src="{{asset('storage/img/'. $item->url)}}" alt="">
    <a href="/{{ $item->id}}/editTeam">Edit</a>
    <form action="/{{$item->id}}/deleteTeam" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE</button>
    </form>
    <hr>
@endforeach

@endsection