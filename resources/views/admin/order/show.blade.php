@extends('layouts.master_admin')
@section('title', 'Show Order')
@section('content')

    <div class="row">
        <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
            <div class="card-header">
                <a href="/order"><i class="fa fa-list"></i></a>
            </div>
            <div class="card-body">

                    <div class="col-md-12">
                        <div class="card-header">
                            <b>{{$order->f_name}}  {{$order->l_name}}  </b>
                        </div>
                        <div class="card-body">
                            <h4>Address</h4>
                            <p>{{$order->address}}</p>
                            <p>Email :<a href="mailto:{{$order->email}}">{{$order->email}} </a> </p>
                            <p>Tel :<a href="tel:{{$order->tel}}"> {{$order->tel}}</a></p>
                            <hr>
                            <h4>Product </h4>
                            <p> <a href="/product/{{$product->product_id}}" class="btn btn-primary"> {{$product->name}} </a></p>
                           <p> Varity : {{$order->order_varity}}</p>
                           <p> Grade : {{$order->order_grade}}</p>
                            <hr>
                            <p>

                              {{$order->application_letter}}
                            </p>
                            <p> Status : {{$order->status}}</p>
                            <h4>Action</h4>
                            <hr>

                            {!! Form::model($order, [
                                'method' => 'PATCH',
                                'route' => ['order.update', $order->id]
                            ]) !!}

                            {{  Form::token()  }}

                            <div class="form-group">
                                <select class="form-control" name="status">
                                    <option value="0"> Pending</option>
                                    <option value="1"> Processing</option>
                                    <option value="2"> Sent</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-dark">Apply Action</button>
                            {{{ Form::close() }}}
                        </div>
                    </div>



            </div>
        </div>
    </div>

@endsection
