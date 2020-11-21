@extends('layouts.inner_page')
@section('title', 'Photo Gallery')
@section('content')
<section id="gallery" class="portfolio">
<div class="container">
 <div class="row">
     <div class="col-md-3">
        <ul id="portfolio-flters">

            <li data-filter="*" class="filter-active">All</li>
            
            <hr>
              @foreach($albums as $album)
              <img src="{{$album->photo}}" class="img img-thumbnile" width="32px"> <li data-filter=".album{{$album->id}}">{{$album->name}}</li> 
              <hr>
              @endforeach



          </ul>

     </div>
     <div class="col-md-9">

    
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            @foreach($photos as $photo)
          <div class="col-lg-4 col-md-6 portfolio-item album{{$photo->album_id}}">
            <img src="{{$photo->photo}}" class="img-fluid" alt="{{$photo->title}}">
            <div class="portfolio-info">
                <h4>{{$photo->title}}</h4>
              <a href="{{$photo->photo}}" data-gall="portfolioGallery" class="venobox preview-link" title="{{$photo->title}}"><i class="bx bx-plus"></i></a>

            </div>
          </div>
            @endforeach
        </div>

     </div>

 </div>
 
    
       
</div>
</section>
@endsection
