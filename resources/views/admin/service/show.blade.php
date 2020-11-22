@extends('layouts.master_admin')
@section('title', 'List Services')
@section('content')

    <div class="row">
        <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
            <div class="card-header">
                <a href="/service"><i class="fa fa-list"></i></a>
                List Services
            </div>
            <div class="card-body row">

                    <div class="col-md-8 offset-2">
                        <div class="card-header">
                            <b>{{$service->name}} </b>
                        </div>
                        <div class="card-body">
                            <a href="/service/{{$service->id}}">
                                <b>{{$service->icon}}</b>
                                <i calss="{{$service->icon}}"></i><br>
                                {{$service->detail}}
                            </a>
                        </div>
                        <div class="card-footer"><a href="/service/{{$service->id}}/edit" class="btn btn-warning">Edit</a> </div>
                    </div>


            </div>
        </div>
    </div>

@endsection
