@extends('layouts.inner_page')
@section('title', 'List Stations')
@section('content')


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="portfolio-details-container">

                @foreach($stations as $station)
                    <div class="col-md-3">
                        <div class="card-header">
                            <b>{{$station->name}} </b>
                        </div>
                        <div class="card-body">
                            <a href="/front/station/{{$station->id}}">
                                <img src="{{$station->banner}}" class="img img-thumbnail" alt="" /><br>

                            </a>
                        </div>
                    </div>
                @endforeach


            </div>
        </section><!-- End Portfolio Details Section -->
    @endsection
    