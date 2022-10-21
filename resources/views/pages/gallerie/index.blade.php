@extends('layouts.index')

@section('content')

<!-- ========== PAGE TITLE ========== -->
      <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
  background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>GALLERY</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{route('home')}}">Home</a>
              </li>
              <li>Gallery</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main class="gallery-page">
        <!-- FILTERS -->
        
        <div class="container">
          <div class="gallery-filters">
            <a href="#" data-filter="*" class="filter active">ALL</a>
            @foreach ($categorieGallerie as $item)
            <a href="#" data-filter=".filter-{{str_replace(' ','',$item->name)}}" class="filter">{{$item->name}}</a>
            @endforeach
          </div>
          <div>
            <button>
              <a href="{{Route('categorieGallerie')}}">Edit filter</a>
            </button>
            <button>
              <a href="{{Route('gallerieForm')}}">Add pictures</a>
            </button>
          </div>
        </div>
        <!-- GALLERY -->
        <div class="container">
          <div class="grid image-gallery row">
            <!-- ITEM -->
            @foreach ($gallerie as $item)
            <div class="gallery-item filter-{{str_replace(' ','' ,$item->categallerie->name)}} col-md-3">
              <figure class="gradient-overlay image-icon">
                <a href="images/gallery/{{$item->url}}">
                  <img src="{{asset('storage/img/'. $item->url)}}" class="img-fluid" alt="Image">
                </a>
                <figcaption>{{$item->namePhoto}}</figcaption>
              </figure>
            </div>
            @endforeach
          </div>
        </div>
@endsection