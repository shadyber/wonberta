@extends('layouts.master_admin')
@section('title', 'Show Single Blog')
@section('content')


    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Blog detail</h6>

        <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">Status</strong>
                    <a href="#"> </a>
                </div>
                <span class="d-block">  @if($blog->status==0)

                       <h4>  <span  class="badge badge-primary"> <i class="fa fa-inbox"></i></span> Pending</h4>
                    @elseif ($blog->status==1)
                     <h4> <span  class="badge badge-info"> <i class="fa fa-star-half"></i></span> Processing</h4>
                    @elseif($blog->status==2)
                     <h4> <span  class="badge badge-success"> <i class="fa fa-check-circle"></i></span>Completed</h4>
                    @endif
</span>
            </div>
        </div>




    </div>
@endsection
