@extends('layouts.master_admin')
@section('title', 'Create Address')
@section('content')

    <div class="row">
        <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
            <div class="card-header">
                Create Address
            </div>
            <div class="card-body">


                <form action="/address" method="post">

                {{  Form::token()  }}

                <div class="form-group">
                    <label>Primary Email</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                        </div>
                        <input type="email" name="email"  class="form-control" placeholder="Primary Email" aria-label="title" aria-describedby="basic-addon11" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>


                <div class="form-group">
                    <label>Primary phone</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                        </div>
                        <input type="tel" name="tel"  class="form-control" placeholder="Primary Telephone" aria-label="title" aria-describedby="basic-addon11" required>
                        @error('tel')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>

                <div class="form-group">
                    <label>Secondary phone</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                        </div>
                        <input type="tel" name="tel2"  class="form-control" placeholder="Secondary Telephone" aria-label="title" aria-describedby="basic-addon11">
                        @error('tel2')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>

                <div class="form-group">
                    <label>Fax</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                        </div>
                        <input type="tel" name="fax" class="form-control" placeholder="Fax" aria-label="title" aria-describedby="basic-addon11" >
                        @error('fax')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>

                <div class="form-group">
                    <label>Location</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                        </div>
                        <input type="text" name="location" class="form-control" placeholder="location" aria-label="title" aria-describedby="basic-addon11" required>
                        @error('location')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>

                <div class="form-group">
                    <label>Primary Address</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                        </div>
                        <input type="text" name="address1"  class="form-control" placeholder="Primary Address" aria-label="title" aria-describedby="basic-addon11" required>
                        @error('address1')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>



                <div class="form-group">
                    <label>Secondary Address</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                        </div>
                        <input type="text" name="address2" class="form-control" placeholder="Secondary Telephone" aria-label="title" aria-describedby="basic-addon11">
                        @error('address2')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>


                <div class="form-group">
                    <label>City</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                        </div>
                        <input type="text" name="city" class="form-control" placeholder="City Town" aria-label="title" aria-describedby="basic-addon11" required>
                        @error('city')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>

                <div class="form-group">
                    <label>Country</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                        </div>
                        <input type="text" name="country" class="form-control" placeholder="Country" aria-label="title" aria-describedby="basic-addon11" required>
                        @error('country')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>

                <div class="form-group">
                    <label>Facebook Profile</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                        </div>
                        <input type="url" name="facebook"  class="form-control" placeholder="Facebook Profile" aria-label="title" aria-describedby="basic-addon11">
                        @error('facebook')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>

                <div class="form-group">
                    <label>Twitter Profile</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                        </div>
                        <input type="url" name="twitter"  class="form-control" placeholder="Twitter Profile" aria-label="title" aria-describedby="basic-addon11">
                        @error('twitter')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>



                <div class="form-group">
                    <label>Google Plus Profile</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                        </div>
                        <input type="url" name="google"  class="form-control" placeholder="Google Plus Profile" aria-label="title" aria-describedby="basic-addon11">
                        @error('google')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>



                <div class="form-group">
                    <label>Instagram Profile</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                        </div>
                        <input type="url" name="instagram" class="form-control" placeholder="Instagram Profile" aria-label="title" aria-describedby="basic-addon11">
                        @error('instagram')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>

                <div class="form-group">
                    <label>Youtube Profile</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                        </div>
                        <input type="url" name="youtube"  class="form-control" placeholder="Youtube Profile" aria-label="title" aria-describedby="basic-addon11">
                        @error('youtube')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>

                <div class="form-group">
                    <label>Pintrest Profile</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                        </div>
                        <input type="url" name="pintrest"  class="form-control" placeholder="Pintrest Profile" aria-label="title" aria-describedby="basic-addon11">
                        @error('pintrest')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>

                <div class="form-group">
                    <label>LinkedIn Profile</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                        </div>
                        <input type="url" name="linkedin"  class="form-control" placeholder="LinkedIn Profile" aria-label="title" aria-describedby="basic-addon11">
                        @error('linkedin')
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
