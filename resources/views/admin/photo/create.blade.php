@extends('layouts.master_admin')
@section('title', 'Create Photo')
@section('content')


    <div class="row">
        <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
            <div class="card-header">
                Create Photo
            </div>
            <div class="card-body">


                <form action="/photo" method="post" enctype="multipart/form-data">
                    {{  Form::token()  }}
                    <div class="form-group">
                        <label>Photo Title</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="fa fa-closed-captioning"></i></span>
                            </div>
                            <input type="text" name="title" class="form-control" placeholder="Photo Name" aria-label="Photo Name" aria-describedby="basic-addon11" required>
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>



                    <div class="form-group">
                        <label> Photo </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-photo-video"></i></span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="photo" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                            @error('photo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Album </label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="fa fa-closed-captioning"></i></span>
                            </div>
                            <select name="album_id" class="form-control" placeholder="Album Id" aria-label="Select Album" aria-describedby="basic-addon11" required>
                                @foreach($albums as $album)
                                    <option value="{{$album->id}}"> {{$album->name}}</option>
                                @endforeach
                            </select>
                            @error('album_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>



                    <div class="form-group">
                        <label>Where is This Photo </label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="fa fa-closed-captioning"></i></span>
                            </div>
                            <select name="station_id" class="form-control" placeholder="Staion Id" aria-label="Select Staion" aria-describedby="basic-addon11" required>
                                <option value="0">None</option>
                                @foreach($stations as $station)
                                    <option value="{{$station->id}}"> {{$station->name}}</option>
                                @endforeach
                            </select>
                            @error('station_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>


                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button type="submit" class="btn btn-dark">Cancel</button>
                {{{ Form::close() }}}

            </div>
        </div>
    </div>


@endsection
