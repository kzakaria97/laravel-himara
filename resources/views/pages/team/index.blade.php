@extends('layouts.index')

@section('content')


<!-- ========== PAGE TITLE ========== -->
<div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
background-size: cover;">
    <div class="container">
      <div class="inner">
        <h1>OUR STAFF</h1>
        <ol class="breadcrumb">
          <li>
            <a href="{{route('home')}}">Home</a>
          </li>
          <li>Our Staff</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- ========== MAIN ========== -->
  <main class="location-page">
    <p>
      <a href="{{Route('teamform')}}">Create new tem or edit</a>
    </p>
    <div class="container">
      <div class="row">
        <!-- ITEM -->
          <div class="col-lg-3 col-md-6">
            <div class="staff-item">
              <figure>
                <img src="{{asset('storage/img/'. $housekeeper[0]->url)}}" class="img-fluid" alt="Image">
                <div class="position">{{$housekeeper[0]->poste}}</div>
              </figure>
              <div class="details">
                <h5>{{$housekeeper[0]->name}}</h5>
                <p>{{$housekeeper[0]->text}}</p>
              </div>
            </div>
          </div>
          <!-- ITEM -->
          @foreach ($team as $item)
          @if($item->poste!='HOUSE KEEPER')
            <div class="col-lg-3 col-md-6">
              <div class="staff-item">
                <figure>
                  <img src="{{asset('storage/img/'. $item->url)}}" class="img-fluid" alt="Image">
                  <div class="position">{{$item->poste}}</div>
                </figure>
                <div class="details">
                  <h5>{{$item->name}}</h5>
                  <p>{{$item->text}}</p>
                </div>
              </div>
            </div>
            @endif
            @endforeach
        </div>
      </div>
      @endsection