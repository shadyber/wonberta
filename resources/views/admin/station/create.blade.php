@extends('layouts.master_admin')
@section('title', 'Create Station')
@section('content')

    <div class="row">
        <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
            <div class="card-header">
                Create A Station
            </div>
            <div class="card-body">


                <form action="/station" method="post" enctype="multipart/form-data">
                    {{  Form::token()  }}
                    <div class="form-group">
                        <label>Your Station Name</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="fa fa-closed-captioning"></i></span>
                            </div>
                            <input type="text" name="name" class="form-control" placeholder="Staion  Name" aria-label="title" aria-describedby="basic-addon11" required>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>



                    <div class="form-group">
                        <label>Your Station Detail</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="fa fa-info"></i></span>
                            </div>
                            <textarea class="form-control" name="detail" placeholder="Station Detail" aria-label="detail" aria-describedby="basic-addon11" required>
                            </textarea>
                            @error('detail')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label> Station Banner </label>
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
                        <label>Your Station Address</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="fa fa-location-arrow"></i></span>
                            </div>
                            <input type="text" name="address" class="form-control" placeholder="Station Address" aria-label="title" aria-describedby="basic-addon11" required>
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>


                    <div class="form-group">
                        <label>Your Station Size</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="fa fa-square"></i></span>
                            </div>
                            <input type="text" name="size" class="form-control" placeholder="Staion Square meter" aria-label="title" aria-describedby="basic-addon11" required>
                            @error('size')
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
