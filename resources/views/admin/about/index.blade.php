@extends('layouts.master_admin')
@section('title', 'Company Profile')
@section('content')



    {!! Form::model($about, [
        'method' => 'PATCH',
        'enctype' => 'multipart/form-data',
        'route' => ['about.update', $about->id]
    ]) !!}

    {{  Form::token()  }}
<div class="row">
    <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
        <div class="card-header">
    About Us
        </div>
        <div class="card-body">

            <form class="form-horizontal form-material">
                <div class="form-group mb-4">
                    <label class="col-md-12 p-0">Company Name</label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="text" placeholder="Company Name" name="name" value="{{ $about->name }}" class="form-control p-0 border-0"> </div>
                </div>
                <div class="form-group mb-4">
                    <label class="col-md-12 p-0">About Us </label>
                    <div class="col-md-12 border-bottom p-0">
                        <textarea rows="3" name="about" class="form-control p-0 border-0 summernote summernote">{{ $about->about }}</textarea>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label class="col-md-12 p-0">Main Photo</label>
                    <div class="col-md-12 border-bottom p-0">
                        <input type="file" placeholder="Main Photo" name="photo" class="form-control p-0 border-0 summernote"> </div>
                </div>



                <div class="form-group mb-4">
                    <label class="col-md-12 p-0">Mission </label>
                    <div class="col-md-12 border-bottom p-0">
                        <textarea rows="3" name="mission" class="form-control p-0 border-0 summernote">{{ $about->mission }}</textarea>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label class="col-md-12 p-0">Vision </label>
                    <div class="col-md-12 border-bottom p-0">
                        <textarea rows="3" name="vision" class="form-control p-0 border-0">{{ $about->vision }}</textarea>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label class="col-md-12 p-0">Value </label>
                    <div class="col-md-12 border-bottom p-0">
                        <textarea rows="3" name="value" class="form-control p-0 border-0 summernote">{{ $about->value }}</textarea>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label class="col-md-12 p-0">Goal </label>
                    <div class="col-md-12 border-bottom p-0">
                        <textarea rows="3" name="goal" class="form-control p-0 border-0 summernote">{{ $about->goal }}</textarea>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label class="col-md-12 p-0">Background </label>
                    <div class="col-md-12 border-bottom p-0">
                        <textarea rows="3" name="background" class="form-control p-0 border-0 summernote">{{ $about->background }}</textarea>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <div class="col-sm-12">
                        <button class="btn btn-success">Update Company Profile</button>
                    </div>
                </div>
            {{{ Form::close() }}}

        </div>
    </div>
</div>

@endsection
