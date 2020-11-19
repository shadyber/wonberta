@extends('layouts.master_admin')
@section('title', 'Create Product')
@section('content')

    <div class="row">
        <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
            <div class="card-header">
               Edit Address
            </div>
            <div class="card-body">


                {!! Form::model($address, [
                    'method' => 'PATCH',
                    'route' => ['address.update', $address->id]
                ]) !!}

                {{  Form::token()  }}

                    <div class="form-group">
                        <label>Primary Email</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="fa fa-envelope"></i></span>
                            </div>
                            <input type="email" name="email" value="{{$address->email}}" class="form-control" placeholder="Primary Email" aria-label="title" aria-describedby="basic-addon11" required>
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
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-phone"></i></span>
                        </div>
                        <input type="tel" name="tel" value="{{$address->tel}}" class="form-control" placeholder="Primary Telephone" aria-label="title" aria-describedby="basic-addon11" required>
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
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-phone-alt"></i></span>
                        </div>
                        <input type="tel" name="tel2" value="{{$address->tel2}}" class="form-control" placeholder="Secondary Telephone" aria-label="title" aria-describedby="basic-addon11">
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
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-fax"></i></span>
                        </div>
                        <input type="tel" name="fax" value="{{$address->fax}}" class="form-control" placeholder="Fax" aria-label="title" aria-describedby="basic-addon11" >
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
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-location-arrow"></i></span>
                        </div>
                        <input type="text" name="location" value="{{$address->location}}" class="form-control" placeholder="location" aria-label="title" aria-describedby="basic-addon11" required>
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
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-search-location"></i></span>
                        </div>
                        <input type="text" name="address1" value="{{$address->address1}}" class="form-control" placeholder="Primary Address" aria-label="title" aria-describedby="basic-addon11" required>
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
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-search-location"></i></span>
                        </div>
                        <input type="text" name="address2" value="{{$address->address2}}" class="form-control" placeholder="Secondary Telephone" aria-label="title" aria-describedby="basic-addon11">
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
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-city"></i></span>
                        </div>
                        <input type="text" name="city" value="{{$address->city}}" class="form-control" placeholder="City Town" aria-label="title" aria-describedby="basic-addon11" required>
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
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-globe-africa"></i></span>
                        </div>
                        <input type="text" name="country" value="{{$address->country}}" class="form-control" placeholder="Country" aria-label="title" aria-describedby="basic-addon11" required>
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
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-facebook"></i></span>
                        </div>
                        <input type="url" name="facebook" value="{{$address->facebook}}" class="form-control" placeholder="Facebook Profile" aria-label="title" aria-describedby="basic-addon11">
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
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-twitter"></i></span>
                        </div>
                        <input type="url" name="twitter" value="{{$address->twitter}}" class="form-control" placeholder="Twitter Profile" aria-label="title" aria-describedby="basic-addon11">
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
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-google-plus"></i></span>
                        </div>
                        <input type="url" name="google" value="{{$address->google}}" class="form-control" placeholder="Google Plus Profile" aria-label="title" aria-describedby="basic-addon11">
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
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-instagram"></i></span>
                        </div>
                        <input type="url" name="instagram" value="{{$address->instagram}}" class="form-control" placeholder="Instagram Profile" aria-label="title" aria-describedby="basic-addon11">
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
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-youtube"></i></span>
                        </div>
                        <input type="url" name="youtube" value="{{$address->youtube}}" class="form-control" placeholder="Youtube Profile" aria-label="title" aria-describedby="basic-addon11">
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
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-pinterest"></i></span>
                        </div>
                        <input type="url" name="pintrest" value="{{$address->pintrest}}" class="form-control" placeholder="Pintrest Profile" aria-label="title" aria-describedby="basic-addon11">
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
                            <span class="input-group-text" id="basic-addon11"><i class="fa fa-linkedin"></i></span>
                        </div>
                        <input type="url" name="linkedin" value="{{$address->linkedin}}" class="form-control" placeholder="LinkedIn Profile" aria-label="title" aria-describedby="basic-addon11">
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
