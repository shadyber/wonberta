@extends('layouts.master_admin')
@section('title', 'Show Product')
@section('content')

    <div class="row">
        <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
            <div class="card-header">
              <a href="/product" class="btn btn-outline-primary"><i class="fa fa-list"></i>Back </a>            </div>
            <div class="card-body row">

                    <div class="col-md-12">
                        <div class="card-header">
                            <b>{{$product->name}} </b>
                        </div>
                        <div class="card-body">
                            <a href="/product/{{$product->id}}">
                                <img src="{{$product->photo}}" class="img img-fluid" alt="" /><br>

                            </a>
                            <p>


                                {{$product->detail}}
                            </p>
                        </div>
                        <div class="card-footer"><a href="/product/{{$product->id}}/edit" class="btn btn-warning">Edit</a> </div>
                    </div>



            </div>
        </div>
    </div>

@endsection
