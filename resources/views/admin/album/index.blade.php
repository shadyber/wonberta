@extends('layouts.master_admin')
@section('title', 'List Albums')
@section('content')

    <div class="row">
        <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
            <div class="card-header">
                List Albums
            </div>
            <div class="card-body row">
                @foreach($albums as $album)
                    <div class="card col-md-4 border-bottom-primary">
                        <div class="card-header">
                            {{$album->name}}
                        </div>
                        <div class="card-body">
<img src="{{$album->photo}}" alt="{{$album->name}}"  class="img img-thumbnail" />


                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
