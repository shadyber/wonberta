@extends('layouts.inner_page')
@section('title', 'Blog')
@section('subtitle', 'List Blog')
@section('content')





    <div class="blog-section pt-90">
        <div class="container">
            <div class="row mb-n10">

                @foreach($blogs as $blog)
                <div class="col-md-6 col-lg-4 mb-10">
                    <!-- Single Blog Post Start -->
                    <div class="single-blog-post-wrap aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <div class="blog-thumbnail">
                            <a href="/front/blog/{{$blog->id}}">
                                <img class="fit-image" src="{{$blog->photo}}" alt="{{$blog->title}}">
                                <img class="btn-plus" src="assets/images/icon/plus.svg" alt="More Detail">
                            </a>
                        </div>
                        <div class="blog-post-details pt-5">
                            <h3 class="title">
                                <a href="/front/blog/{{$blog->id}}">{{$blog->title}}</a>
                            </h3>
                            <div class="post-meta mb-3 mt-3">
                                <a href="#"><i class="fa fa-user"></i> Admin</a>
                                <span><i class="fa fa-clock-o"></i> {{$blog->created_at->diffForHumans()}}</span>
                            </div>
                            <p class="desc-content mb-2 mb-md-5">{{\Illuminate\Support\Str::substr($blog->detail,0,300)}}</p>
                            <a href="/front/blog/{{$blog->id}}" class="btn btn-hover-primary read-more">Keep Reading</a>
                        </div>
                    </div>
                    <!-- Single Blog Post End -->
                </div>
            @endforeach



                          <!-- Single Blog Post Start -->
                    <div class="single-blog-post-wrap aos-init" data-aos="fade-up" data-aos-delay="400">
                        <div class="blog-thumbnail">
                            <a href="/front/blog/{{$blog->id}}">
                                <img class="fit-image" src="{{$blog->photo}}" alt="{{$blog->title}}">
                                <img class="btn-plus" src="assets/images/icon/plus.svg" alt="Plus Icons">
                            </a>
                        </div>
                        <div class="blog-post-details pt-5">
                            <h2 class="title">
                                <a href="/front/blog/{{$blog->id}}">{{$blog->title}}</a>
                            </h2>
                            <div class="post-meta mb-3 mt-3">
                                <a href="#"><i class="fa fa-user"></i> Admin</a>
                                <span><i class="fa fa-clock-o"></i> {{$blog->created_at}}</span>
                            </div>
                            <p class="desc-content mb-2 mb-md-5">{{$blog->detail}}</p>
                            <a href="/front/blog/{{$blog->id}}" class="btn btn-hover-primary read-more">Keep Reading</a>
                        </div>
                    </div>
                    <!-- Single Blog Post End -->
                </div>
            </div>



            <div class="row">
                <div class="col">
                    <!-- Pagination Area Start Here -->
                    <ul class="pagination mt-10 pt-10 border-top d-flex justify-content-center">
                        <li><a href="#" class="prev"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><span class="page-numbers dots"><i class="fa fa-ellipsis-h"></i></span></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#" class="next"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                    <!-- Pagination Area End Here -->
                </div>
            </div>
        </div>
    </div>

     @endsection
