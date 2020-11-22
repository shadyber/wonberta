@extends('layouts.master_admin')
@section('title', 'Album Detail '.$album->name)
@section('content')

<div class="row">
    <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary"><br>{{$album->detail}}
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <a href="/album"><i class="fa fa-list"></i></a>

            <h6 class="m-0 font-weight-bold text-primary">{{$album->name}}</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Album Actions:</div>
                    <a class="dropdown-item" href="#">Delete</a>

                    <a class="dropdown-item" href="/album/{{$album->id}}/edit">Edit</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/gallery">Show in Front</a>
                </div>
            </div>
        </div>
        <div class="card-body row">
         @foreach($album->photos as $photo)
          <div class="col-md-3">
              <img src="{{$photo->photo}}" alt="{{$photo->name}}" class="img img-thumbnail">

          </div>
             @endforeach
        </div>
    </div>
</div>

@endsection
