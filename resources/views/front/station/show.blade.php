@extends('layouts.inner_page')
@section('title', 'Stations')
@section('subtitle', $station->name)
@section('content')

    <div class="portfolio-section pt-90" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row" style="transform: none;">
                <div class="col-md-6 col-12">
                    <!-- Portfolio Details Image Start -->
                    <div class="portfolio-details-image mb-n6">
                        <div class="single-image mb-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            <img src="{{$station->banner}}" alt="{{$station->name}}">
                        </div>

                        @foreach($station_photos as $photo)
                            <div class="single-image mb-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">

                            <img src="{{$photo->photo}}" class="img-fluid" alt="{{$photo->name}}">
                            </div>
                        @endforeach


                    </div>
                    <!-- Portfolio Details Image End -->
                </div>
                <div class="col-md-6 col-12 mt-6 mt-md-0" id="sticky-sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                    <!-- Portfolio Details Content Start -->

                    <!-- Portfolio Details Content End -->
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 689.5px;"><div class="portfolio-details-content aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            <div class="portfolio-details-desc mb-8">
                                <h2 class="title mb-3">{{$station->name}}</h2>
                                {!!html_entity_decode($station->detail)!!}
                            </div>
                            <div class="portfolio-details-info">
                                <h4 class="title mb-4">Informations</h4>
                                <ul>
                                    <li>
                                        <span>Address</span>
                                        <a href="#"> {{$station->address}}</a>
                                    </li>
                                    <li>
                                        <span>Altitude </span>
                                        <a href="#"> {{$station->altitude}}</a>
                                    </li>

                                    <li>
                                        <span>Size</span>
                                        {{$station->size}}
                                    </li>
                                    <li>
                                        <span>Share</span>
                                        Station URL: <a href="/front/station/{{$station->id}}">www.wonberta.com/front/station/{{$station->id}}</a><br>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div></div></div>
            </div>
        </div>
    </div>




@endsection
