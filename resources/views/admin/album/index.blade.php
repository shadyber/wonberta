@extends('layouts.master_admin')
@section('title', 'List Albums')
@section('content')

    <div class="row">
        <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
            <div class="card-header">
                List Albums
                <a href="/album/create"><i class="fa fa-plus"></i> Create New</a>
            </div>

            <div class="card-body row">
                @foreach($albums as $album)
                    <div class="card col-md-4 border-bottom-primary">
                        <div class="card-header">
                            {{$album->name}}
                        </div>
                        <div class="card-body">
                            <a href="/album/{{$album->id}}">
<img src="{{$album->photo}}" alt="{{$album->name}}"  class="img img-thumbnail" />

                            </a>
                        </div>
                        <div class="card-footer">
                            <a href="/album/{{$album->id}}/edit" class="btn btn-primary">Edit</a>
                            <a href="/album/{{$album->id}}/edit" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
