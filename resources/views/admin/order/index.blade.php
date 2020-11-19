@extends('layouts.master_admin')
@section('title', 'List Orders')
@section('content')

<div class="row">
    <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
        <div class="card-header">
   List Orders
        </div>
        <div class="card-body row">
@foreach($orders as $order)
            <div class="card col-md-12 border-bottom-primary">
                <div class="card-header">
                   Full Name: {{$order->f_name.' '.$order->l_name}}
                </div>
                <div class="card-body">
                    {{$order->address}}
                    <hr>

                    {{$order->products}}

                </div>
            </div>
@endforeach
        </div>
    </div>
</div>

@endsection
