@extends('layouts.master_admin')
@section('title', 'List Stations')
@section('content')

    <div class="row">
        <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
            <div class="card-header">
                <a href="/station/create"><i class="fa fa-plus"></i></a>

                List Stations
            </div>
            <div class="card-body row">

                @foreach($stations as $station)
                    <div class="col-md-3">
                        <div class="card-header">
                            <b>{{$station->name}} </b>
                        </div>
                        <div class="card-body">
                            <a href="/station/{{$station->id}}">
                                <img src="{{$station->banner}}" class="img img-thumbnail" alt="" /><br>

                            </a>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>

@endsection
