@extends('layouts.inner_page')
@section('title', 'Blog')
@section('subtitle', $blog->title)
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 order-lg-1">
                <div class="row mb-n10">
                    <div class="col-12 mb-10">
                        <!-- Single Post Details Start -->
                        <div class="blog-details mb-10">
                            <!-- Image -->
                            <div class="image mb-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                <img src="{{$blog->photo}}" alt="{{$blog->title}}">
                            </div>
                            <!-- Single Post Details Content Start -->
                            <div class="content aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                <!-- Title -->
                                <h2 class="title mb-3">{{$blog->title}}</h2>
                                <!-- Meta -->
                                <div class="meta-list mb-3">
                                    <a href="#" class="meta-item author">By Admin</a>
                                    <span class="meta-item date">{{$blog->created_at->diffForHumans()}}</span>
                                    <span class="meta-item comment"><a href="#">03 Comments</a></span>
                                </div>
                                <!-- Description -->
                                <div class="desc">
                                {{$blog->detail}}
                                 </div>
                            </div>
                            <!-- Single Post Details Content End -->
                            <!-- Single Post Details Footer Start -->
                            <div class="single-post-details-footer mt-10 aos-init" data-aos="fade-up" data-aos-delay="300">
                                <!-- Shear Article Start -->
                                <div class="share-article">
                                        <span class="left-side">
                                        <a href="#"> <i class="fa fa-long-arrow-left"></i> Older Post</a>
                                    </span>
                                    <h6 class="text-uppercase">Share this article</h6>
                                    <span class="right-side">
                                        <a href="#">Newer Post <i class="fa fa-long-arrow-right"></i></a>
                                    </span>
                                </div>
                                <!-- Shear Article Start -->
                                <!-- Social Shear Start -->
                                <div class="widget-social d-flex justify-content-center border-top pt-3">
                                    <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                                    <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                    <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                                    <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                                </div>
                                <!-- Social Shear Start -->
                            </div>
                            <!-- Single Post Details Footer End -->
                        </div>
                        <!-- Single Post Details End -->
                        <!-- Comments Area Wrapper Start -->
                        <div class="comment-area-wrapper mt-5 aos-init" data-aos="fade-up" data-aos-delay="400">
                            <h3 class="title mb-6">5 Comments</h3>
                            <div class="single-comment-wrap mb-10 d-flex">
                                <figure class="author-thumb">
                                    <a href="#">
                                        <img src="assets/images/client/1.jpg" alt="Author">
                                    </a>
                                </figure>
                                <div class="comments-info">
                                    <p class="mb-1">This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet</p>
                                    <div class="comment-footer d-flex justify-content-between">
                                        <span class="author"><a href=""><strong>Duy</strong></a> - July 30, 2020</span>
                                        <a href="#" class="btn-reply"><i class="fa fa-reply"></i> Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-comment-wrap mb-10 comment-reply d-flex">
                                <figure class="author-thumb">
                                    <a href="#">
                                        <img src="assets/images/client/2.jpg" alt="Author">
                                    </a>
                                </figure>
                                <div class="comments-info">
                                    <p class="mb-1">Praesent bibendum risus pellentesque faucibus rhoncus. Etiam a mollis odio. Integer urna nisl, fermentum eu mollis et, gravida eu elit.</p>
                                    <div class="comment-footer d-flex justify-content-between">
                                        <span class="author"><a href=""><strong>Alex</strong></a> - August 30, 2020</span>
                                        <a href="#" class="btn-reply"><i class="fa fa-reply"></i> Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-comment-wrap mb-10 d-flex">
                                <figure class="author-thumb">
                                    <a href="#">
                                        <img src="assets/images/client/3.jpg" alt="Author">
                                    </a>
                                </figure>
                                <div class="comments-info">
                                    <p class="mb-1">Praesent bibendum risus pellentesque faucibus rhoncus. Etiam a mollis odio. Integer urna nisl, fermentum eu mollis et, gravida eu elit.</p>
                                    <div class="comment-footer d-flex justify-content-between">
                                        <span class="author"><a href=""><strong>Tuntuni</strong></a> - September 10, 2020</span>
                                        <a href="#" class="btn-reply"><i class="fa fa-reply"></i> Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-comment-wrap mb-10 d-flex">
                                <figure class="author-thumb">
                                    <a href="#">
                                        <img src="assets/images/client/4.jpg" alt="Author">
                                    </a>
                                </figure>
                                <div class="comments-info">
                                    <p class="mb-1">This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet</p>
                                    <div class="comment-footer d-flex justify-content-between">
                                        <span class="author"><a href=""><strong>Jack</strong></a> - October 23, 2020</span>
                                        <a href="#" class="btn-reply"><i class="fa fa-reply"></i> Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-comment-wrap comment-reply d-flex">
                                <figure class="author-thumb">
                                    <a href="#">
                                        <img src="assets/images/client/2.jpg" alt="Author">
                                    </a>
                                </figure>
                                <div class="comments-info">
                                    <p class="mb-1">Praesent bibendum risus pellentesque faucibus rhoncus. Etiam a mollis odio. Integer urna nisl, fermentum eu mollis et, gravida eu elit.</p>
                                    <div class="comment-footer d-flex justify-content-between">
                                        <span class="author"><a href=""><strong>Alex</strong></a> - October 26, 2020</span>
                                        <a href="#" class="btn-reply"><i class="fa fa-reply"></i> Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Comments Area Wrapper End -->
                        <!-- Blog Comments Area Start -->
                        <div class="blog-comment-form-wrapper mt-10 aos-init" data-aos="fade-up" data-aos-delay="400">
                            <div class="blog-comment-form-title">
                                <h2 class="title">Leave a comment</h2>
                            </div>
                            <div class="comment-box">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-12 col-custom">
                                            <div class="input-item mt-4 mb-4">
                                                <textarea cols="30" rows="5" name="comment" class="rounded-0 w-100 custom-textarea input-area" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-custom">
                                            <div class="input-item mb-4">
                                                <input class="rounded-0 w-100 input-area name" type="text" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-custom">
                                            <div class="input-item mb-4">
                                                <input class="rounded-0 w-100 input-area email" type="text" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-12-6 col-custom">
                                            <div class="input-item mb-4">
                                                <input class="rounded-0 w-100 input-area name" type="text" placeholder="Website">
                                            </div>
                                        </div>
                                        <div class="col-12 col-custom mt-40">
                                            <button type="submit" class="btn btn-primary btn-hover-dark">Post comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Blog Comments Area End -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 order-lg-2">
                <div class="sidebar-wrap">
                    <!--Sidebar Search Start-->
                    <div class="sidebar aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <div class="sidebar-search">
                            <form action="#">
                                <input placeholder="Enter Keywords" type="text">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!--Sidebar Search End-->
                    <!--Sidebar Category Start-->
                    <div class="sidebar aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <h4 class="sidebar-title">categories</h4>
                        <ul class="sidebar-link">


                            <li><a href="#">All <span>( {{count(\App\Models\Blog::allBlogs())}} )</span></a></li>

                        </ul>
                    </div>
                    <!--Sidebar Category End-->
                    <!--Sidebar Post Start-->
                    <div class="sidebar aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                        <h4 class="sidebar-title">recent post</h4>
                        <ul class="sidebar-blog">
                            @foreach($blogs as $blog)
                            <li>
                                <a href="/front/blog/{{$blog->id}}" class="image"><img src="{{$blog->photo}}" alt="{{$blog->title}}"></a>
                                <div class="content">
                                    <a class="title" href="/front/blog{{$blog->id}}">{{$blog->title}}</a>
                                    <span class="date">{{$blog->created_at->diffForHumans()}}</span>
                                </div>
                            </li>
                            @endforeach


                        </ul>
                    </div>
                    <!--Sidebar Post End-->
                    <!--Sidebar Tags Start-->
                    <div class="sidebar aos-init" data-aos="fade-up" data-aos-delay="500">
                        <h4 class="sidebar-title">tags</h4>
                        <div class="sidebar-tags">
                            <a href="#" class="active">Corporate</a>
                            <a href="#">Business</a>
                            <a href="#">Client</a>
                            <a href="#">HTML</a>
                            <a href="#">Wordpress</a>
                            <a href="#">Branding</a>
                            <a href="#">Website</a>
                            <a href="#">Development</a>
                        </div>
                    </div>
                    <!--Sidebar Tags End-->
                </div>
            </div>
        </div>
    </div>
@endsection
