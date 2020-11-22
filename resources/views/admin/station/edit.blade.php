@extends('layouts.master_admin')
@section('title', 'Edit Station')
@section('content')

    <div class="row">
        <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
            <div class="card-header">
                <a href="/station"><i class="fa fa-list"></i></a>

                Edit A Station
            </div>
            <div class="card-body">


                {!! Form::model($station, [
                    'method' => 'PATCH',
                    'route' => ['station.update', $station->id]
                ]) !!}

                {{  Form::token()  }}
                    <div class="form-group">
                        <label>Your Station Name</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="fa fa-closed-captioning"></i></span>
                            </div>
                            <input type="text" name="name" class="form-control" placeholder="Staion  Name" value="{{$station->name}}" aria-label="title" aria-describedby="basic-addon11" required>
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
                            <textarea class="form-control summernote" name="detail"  placeholder="Station Detail" aria-label="detail" aria-describedby="basic-addon11" required>
                           {{$station->detail}}
                            </textarea>
                            @error('detail')
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
                            <input type="text" name="address"  value="{{$station->address}}" class="form-control" placeholder="Station Address" aria-label="title" aria-describedby="basic-addon11" required>
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
                            <input type="text" name="size" class="form-control"  value="{{$station->size}}" placeholder="Staion Square meter" aria-label="size" aria-describedby="basic-addon11">
                            @error('size')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group">
                        <label>Your Station Altitude</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="fa fa-text-height"></i></span>
                            </div>
                            <input type="text" name="altitude"  value="{{$station->altitude}}" class="form-control" placeholder="altitude" aria-label="altitude" aria-describedby="basic-addon11">
                            @error('altitude')
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
