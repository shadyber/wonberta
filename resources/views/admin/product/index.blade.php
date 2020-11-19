@extends('layouts.master_admin')
@section('title', 'List Product')
@section('content')

<div class="row">
    <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
        <div class="card-header">
   List Products
        </div>
        <div class="card-body row">

            @foreach($products as $product)
                <div class="col-md-3">
                    <div class="card-header">
                       <b>{{$product->name}} </b>
                    </div>
                    <div class="card-body">
                      <a href="/product/{{$product->id}}">
                        <img src="{{$product->photo}}" class="img img-thumbnail" alt="" /><br>

                      </a>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</div>

@endsection
