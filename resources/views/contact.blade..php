@extends('layouts.inner_page')
@section('title', 'About Us')
@section('title', 'Know More About Us')
@section('content')


    <!-- About Section Start Here -->
    <div class="about-section pt-90 pb-90">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-5 order-1 m-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="restaurant-about-content section-title">
                        <h2 class="title mb-5">{{$about->name}}</h2>
                        <p class="desc-content mb-7">{{$about->about}}</p>
                        <a href="/front#" class="btn btn-dark btn-hover-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 order-0 order-lg-1" data-aos="fade-up" data-aos-delay="300">
                    <figure class="marketing-about-thumb mb-md-40 mb-sm-40">
                        <img class="fit-image" src="{{$about->photo}}" alt="{{$about->name}}">
                        <figcaption class="about-video-btn">
                            <a href="{{$about->video}}" class="btn-play btn-video-popup video-popup">
                                <i class="fa fa-play"></i>
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End Here -->

    <!-- Support Section Start Here -->
    <div class="support-area bg-light pt-90 pb-90 mt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="support-wrapper" data-aos="fade-up" data-aos-delay="300">
                        <div class="section-title text-center">
                            <h1 class="title">Want to Test Our Coffee ?</h1>
                            <p class="mt-5 mb-5 pb-3">Feel Free to Send a Sample Request here </p>
                        </div>
                        <div class="support-button">
                            <a class="btn btn-dark btn-hover-primary" href="#"  data-toggle="modal" data-target="#sampleModal">Send a Sample Request</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Support Section End Here -->
@endsection
