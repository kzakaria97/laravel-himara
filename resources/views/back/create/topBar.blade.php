@extends('layouts.app')
@section('content')
<h1>TopBar</h1>
<form action="/storeTopBar" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="name" id="" placeholder="name">
    <input type="text" name="phone" id="" placeholder="Phone">
    <input type="text" name="email" id="" placeholder="Email">  
    <input type="submit" value="submit">
</form>


@endsection