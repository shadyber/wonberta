@extends('layouts.master_admin')
@section('title', 'Create Slide')
@section('content')

    <div class="row">
        <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
            <div class="card-header">

                <a href="/slide" class="btn  btn-info">List all Slids</a>
            </div>
            <div class="card-body">


                {!! Form::model($slide, [
                    'method' => 'PATCH',
                    'enctype' => 'multipart/form-data',
                    'route' => ['slide.update', $slide->id]
                ]) !!}

                {{  Form::token()  }}
                    <div class="form-group">
                        <label>Title</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="fa fa-closed-captioning"></i></span>
                            </div>
                            <input type="text" name="title" class="form-control" placeholder="Slide Title" aria-label="title" aria-describedby="basic-addon11" required>
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>



                    <div class="form-group">
                        <label>Slide Subtitle</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="fa fa-info"></i></span>
                            </div>
                            <textarea class="form-control" name="subtitle" placeholder="Station Detail" aria-label="subtitle" aria-describedby="basic-addon11" required>
                            </textarea>
                            @error('subtitle')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Slide Photo </label>
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


                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button type="submit" class="btn btn-dark">Cancel</button>
                {{{ Form::close() }}}

            </div>
        </div>
    </div>

@endsection
