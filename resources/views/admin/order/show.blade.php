@extends('layouts.master_admin')
@section('title', 'Show Order')
@section('content')


    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Order detail</h6>

        <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">Status</strong>
                    <a href="#"> </a>
                </div>
                <span class="d-block">  @if($order->status==0)

                       <h4>  <span  class="badge badge-primary"> <i class="fa fa-inbox"></i></span> Pending</h4>
                    @elseif ($order->status==1)
                     <h4> <span  class="badge badge-info"> <i class="fa fa-star-half"></i></span> Processing</h4>
                    @elseif($order->status==2)
                     <h4> <span  class="badge badge-success"> <i class="fa fa-check-circle"></i></span>Completed</h4>
                    @endif
</span>
            </div>
        </div>
        <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">Full Name</strong>
                    <a href="#"> </a>
                </div>
                <span class="d-block">{{$order->f_name}}  {{$order->l_name}}</span>
            </div>
        </div>
        <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">Email</strong>
                    <a href="mailto:{{$order->tel}}"> Send Mail </a>
                </div>
                <span class="d-block">{{$order->email}}</span>
            </div>
        </div>
        <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">Tel</strong>
                    <a href="tel:{{$order->tel}}">Call</a>
                </div>
                <span class="d-block">{{$order->tel}}</span>
            </div>
        </div>
        <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">Shipping Address</strong>
                    <a href=""></a>
                </div>
                <span class="d-block">{{$order->address}}</span>
            </div>
        </div>

        <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">Message</strong>
                    <a href="#"> </a>
                </div>
                <span class="d-block">{{$order->application_letter}}</span>
            </div>
        </div>

        <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">Product</strong>
                    <a href="/product/{{$order->product->id}}">Detail</a>
                </div>
                <span class="d-block">
                <img src="{{$order->product->photo}}" class="img img-thumbnail" width="32px" />{{$order->product->name}}</span>
                <span class="d-block">Varity : {{$order->order_varity}}</span>
                <span class="d-block">Grade : {{$order->order_grade}}</span>
            </div>
        </div>


        <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">Action</strong>
                    <a href="#"> </a>
                </div>
                <span class="d-block">

                {!! Form::model($order, [
                    'method' => 'PATCH',
                    'route' => ['order.update', $order->id]
                ]) !!}
            {{Form::token()}}
                        <div class="form-group">
                          <select name="status" id="" class="form-control">

                            <option value="0">Pending</option>
                            <option value="1">Processing</option>
                            <option value="2">Sent</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-outline-primary" type="submit"> Apply Accion</button>
                        </div>


                    </form>


                </span>
            </div>
        </div>

        <small class="d-block text-right mt-3">
            <a href="/order">All Orders</a>
        </small>
    </div>
@endsection
