@extends('layouts.master_admin')
@section('title', 'List Orders')
@section('content')

<div class="row">
    <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
        <div class="card-header">
            <a href="/order/create"><i class="fa fa-plus"></i></a>
   List Orders
        </div>
        <div class="card-body row">
@foreach($orders as $order)
            <div class="card col-md-4

@if($order->status==0)
                border-left-primary
                border-right-primary
                border-bottom-primary
                border-top-0
                @else
                border-left-secondary
               border-right-secondary
               border-bottom-secondary
               border-top-1
@endif
">
                <div class="card-header">Name: {{$order->f_name.' '.$order->l_name}}
                </div>
                <div class="card-body">
                    <a href="/order/{{$order->id}}">
                   A: {{$order->address}}
                    <hr>

                    P:{{$order->products}}
                    </a>
                </div>
            </div>
@endforeach
        </div>
    </div>
</div>

@endsection
