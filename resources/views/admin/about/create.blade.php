@extends('layouts.master_admin')
@section('title', 'Create Company Profile')
@section('content')



    <form action="/about" method="post" enctype="multipart/form-data">

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
                            <input type="text" placeholder="Company Name" name="name"  class="form-control p-0 border-0"> </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">About Us </label>
                        <div class="col-md-12 border-bottom p-0">
                            <textarea rows="3" name="about" class="form-control p-0 border-0"></textarea>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Main Photo</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="file" placeholder="Main Photo" name="photo" class="form-control p-0 border-0"> </div>
                    </div>



                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Mission </label>
                        <div class="col-md-12 border-bottom p-0">
                            <textarea rows="3" name="mission" class="form-control p-0 border-0"></textarea>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Vision </label>
                        <div class="col-md-12 border-bottom p-0">
                            <textarea rows="3" name="vision" class="form-control p-0 border-0"></textarea>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Value </label>
                        <div class="col-md-12 border-bottom p-0">
                            <textarea rows="3" name="value" class="form-control p-0 border-0"></textarea>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Goal </label>
                        <div class="col-md-12 border-bottom p-0">
                            <textarea rows="3" name="goal" class="form-control p-0 border-0"></textarea>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Background </label>
                        <div class="col-md-12 border-bottom p-0">
                            <textarea rows="3" name="background" class="form-control p-0 border-0"></textarea>
                        </div>
                    </div>



                    <div class="form-group mb-4">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Create Company Profile</button>
                        </div>
                    </div>
                {{{ Form::close() }}}

            </div>
        </div>
    </div>

@endsection
