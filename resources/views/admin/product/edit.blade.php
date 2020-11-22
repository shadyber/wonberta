@extends('layouts.master_admin')
@section('title', 'Edit Product')
@section('content')

    <div class="row">
        <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
            <div class="card-header">
                Edit Product
            </div>
            <div class="card-body">


                {!! Form::model($product, [
                    'method' => 'PATCH',
                    'route' => ['product.update', $product->id]
                ]) !!}

                {{  Form::token()  }}

                    <div class="form-group">
                        <label>Your Product Name</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                            </div>
                            <input type="text" name="name" value="{{$product->name}}" class="form-control" placeholder="Project Title" aria-label="title" aria-describedby="basic-addon11" required>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>



                    <div class="form-group">
                        <label>Your Product Detail</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="fa fa-text"></i></span>
                            </div>
                            <textarea class="form-control" name="detail"  placeholder="Project Detail" aria-label="detail" aria-describedby="basic-addon11" required>
                          {{$product->detail}}  </textarea>
                            @error('detail')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label> Product Photo </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-image"></i></span>
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
