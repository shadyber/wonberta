@extends('layouts.inner_page')
@section('title', 'Show Stations')
@section('content')


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="portfolio-details-container">

                <div class="owl-carousel portfolio-details-carousel">
                    <img src="{{$station->banner}}" class="img-fluid" alt="{{$station->name}}">
                    @foreach($station_photos as $photo)
                        <img src="{{$photo->photo}}" class="img-fluid" alt="{{$photo->name}}">
                    @endforeach


                </div>

                <div class="portfolio-info">
                    <h3>{{$station->name}}</h3>
                    <ul>
                        <li><strong>Address</strong>: {{$station->address}}</li>
                        
                        <li><strong>Altitude </strong>: {{$station->altitude}}</li>
                        <li><strong>Size</strong>: {{$station->size}} m <sup> 2</sup></li>

                        <li><strong>Station URL</strong>: <a href="/front/station/{{$station->id}}">www.wonberta.com/front/station/{{$station->id}}</a></li>
                    </ul>
                </div>

            </div>

            <div class="portfolio-description">
                <h2>{{$station->name}}</h2>
                <p>
                    {{$station->detail}}
                </p>
            </div>




        </div>
    </section><!-- End Portfolio Details Section -->

    <section id="products" class="team section-bg">
        <div class="container" data-aos="fade-up">
    
            <div class="section-title">
                <h2>Photo Taken </h2>
                <p>At this Station</p>
            </div>
    
            <div class="row">
    
                @foreach($station_photos as $photo)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{$photo->photo}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>{{$photo->name}}</h4>
                               
                            </div>
                            <div class="social">
                                    </div>
                        </div>
                    </div>
                </div>
                @endforeach
    
            </div>
    
        </div>
    </section><!-- End Team Section -->
    

    

@endsection
