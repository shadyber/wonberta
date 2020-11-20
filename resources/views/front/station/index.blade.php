@extends('layouts.master_front')
@section('title', 'List Stations')
@section('content')

    <div class="row">
        <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
            <div class="card-header">
                List Stations
            </div>
            <div class="card-body row">

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
        </div>
    </div>

@endsection
