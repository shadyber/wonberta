@extends('layouts.master_admin')
@section('title', 'List Of Blogs')
@section('content')

    <div class="row">
        <div class=" col-lg-12 col-md-12 col-sm-12 border-left-primary">


            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <h6 class="border-bottom border-gray pb-2 mb-0">All Orders</h6>

                @foreach($blogs as $blog)
                    <a href="/blog/{{$blog->id}}" >
                        <div class="media text-muted pt-3">
                            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">


                                @if(!$blog->status==0)
                                    <strong class="text-gray-300">
                                        {{$blog->title}}
                                        @endif
                                        {{$blog->title}}
                                        @if(!$blog->status==0)
                                          
                                    </strong>
                                @endif
                            </p>
                        </div>
                    </a>
                @endforeach



                <small class="d-block text-right mt-3">
                    <a href="#">More Blog</a>
                </small>
            </div>




@endsection
