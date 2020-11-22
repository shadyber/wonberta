@extends('layouts.master_admin')
@section('title', 'Show Stations')
@section('content')

    <div class="row">
        <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
            <div class="card-header">
                <a href="/station"><i class="fa fa-list"></i></a>
            </div>
            <div class="card-body row">

                    <div class="col-md-12">
                        <div class="card-header">
                            <b>{{$station->name}} </b>
                        </div>
                        <div class="card-body">
                            <a href="/station/{{$station->id}}">
                                <img src="{{$station->banner}}" class="img img-fluid" alt="" /><br>

                            </a>
                            <p>
                                {{$station->detail}}
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="/station/{{$station->id}}/edit" class="btn btn-warning">Edit</a>
                        </div>
                    </div>



            </div>
        </div>
    </div>

@endsection
