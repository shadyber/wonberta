
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicons -->
  <link href="/logo.ico" rel="icon">
  <link href="/logo.ico" rel="apple-touch-icon">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', ' Wonberta General Import and Export') }} General Import &amp; Export plc.</title>

    <!-- Vendor CSS (Icon Font) -->
    <!--
<link rel="stylesheet" href="/front/assets/css/vendor/fontawesome.min.css">
-->

    <!-- Plugins CSS (All Plugins Files) -->
    <!--
<link rel="stylesheet" href="/front/assets/css/plugins/splitting.min.css">
<link rel="stylesheet" href="/front/assets/css/plugins/animate.min.css">
<link rel="stylesheet" href="/front/assets/css/plugins/jquery-ui.min.css">
<link rel="stylesheet" href="/front/assets/css/plugins/nice-select.min.css">
<link rel="stylesheet" href="/front/assets/css/plugins/swiper-bundle.min.css">
<link rel="stylesheet" href="/front/assets/css/plugins/aos.min.css">
<link rel="stylesheet" href="/front/assets/css/plugins/magnific-popup-min.css">
-->

    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="/front/assets/css/style.css" />  -->


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="/front/assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="/front/assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="/front/assets/css/style.min.css">




    @foreach($slides as $slide)

        <style>
.slide-{{++$j}} {

    background-image: url("{{$slide->photo}}");
    background-color: rgba(0, 0, 0, 0.8);
}

        </style>
 @endforeach



</head>

<body>
    <div id="preloader">
        <div class="preloader">
            <div class="spinner-border text-primary"></div>
        </div>
    </div>



@include('admin.inc.front_nav')
    <!-- Header Area End Here -->

    <!-- Slider/Intro Section Start -->
    <div class="intro11-slider-wrap section">
        <div class="intro11-slider swiper-container">
            <div class="swiper-wrapper">


                @foreach($slides as $slide)
          {{$i++}}

                <div class="single-slide-wrapper swiper-slide slide-{{ $i }} slide-bg-1 bg-position">
                    <!-- Intro Content Start -->
                    <div class="slider-content text-center">
                        <h2 class="title" data-splitting>{{ $slide->title }}</h2>
                        <h4 class="sub-title">{{ $slide->subtitle }}</h4>
                        <a href="/" class="btn btn-outline-light btn-lg">Discover More</a>
                    </div>
                    <!-- Intro Content End -->
                </div>
                @endforeach




            </div>
            <!-- Slider Navigation -->
            <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i class="fa fa-long-arrow-left"></i></div>
            <div class="home1-slider-next swiper-button-next main-slider-nav"><i class="fa fa-long-arrow-right"></i></div>
            <!-- Slider pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- Slider/Intro Section End -->
    <!-- About Section Start Here -->
    <div class="about-section pt-90 pb-90">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-5 order-1 m-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="restaurant-about-content section-title">
                        <h2 class="title mb-5">{{$about->name}}</h2>
                        <p class="desc-content mb-7">{{$about->about}}</p>
                        <a href="/front#" class="btn btn-dark btn-hover-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 order-0 order-lg-1" data-aos="fade-up" data-aos-delay="300">
                    <figure class="marketing-about-thumb mb-md-40 mb-sm-40">
                        <img class="fit-image" src="{{$about->photo}}" alt="{{$about->name}}">
                        <figcaption class="about-video-btn">
                            <a href="{{$about->video}}" class="btn-play btn-video-popup video-popup">
                                <i class="fa fa-play"></i>
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End Here -->
    <!-- Service Section Start Here -->
    <div class="service-section pb-90">
        <div class="container">
            <div class="row text-center mb-10">
                <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="title">Our Profile</h3>
                    <h4 class="sub-title mb-0"> {{$about->background}}</h4>
                </div>
            </div>
            <div class="row mb-n10">
              @if($about->mission!=''|| $about->mission!=null)
                <div class="col-lg-3 col-md-6 mb-10">
                    <div class="single-service-wrapper" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-icon">
                            <i class="fa fa-flask"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="title">Mission</h4>
                            <p class="desc-content">{{$about->mission}}</p>
                        </div>
                    </div>
                </div>

                @endif

              @if($about->vision!=''|| $about->vision!=null)
                <div class="col-lg-3 col-md-6 mb-10">
                    <div class="single-service-wrapper" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-icon">
                            <i class="fa fa-pencil-square-o"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="title">Vision</h4>
                            <p class="desc-content">{{$about->vision}}.</p>
                        </div>
                    </div>
                </div>
@endif

              @if($about->goal!=''|| $about->goal!=null)
                <div class="col-lg-3 col-md-6 mb-10">
                    <div class="single-service-wrapper" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-icon">
                            <i class="fa fa-compass"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="title">Goal</h4>
                            <p class="desc-content">{{$about->goal}}</p>
                        </div>
                    </div>
                </div>
                @endif

              @if($about->value!=''|| $about->value!=null)
                <div class="col-lg-3 col-md-6 mb-10">
                    <div class="single-service-wrapper" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-icon">
                            <i class="fa fa-codepen"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="title">Values</h4>
                            <p class="desc-content">{{$about->value}}</p>
                        </div>
                    </div>
                </div>

@endif
            </div>
        </div>
    </div>
    <!-- Service Section End Here -->


    <!-- End Portfolio Section -->
<section id="products" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Products</h2>
            <p>Check our Products</p>
        </div>

        <div class="row">

            @foreach($products as $product)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{$product->photo}}" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>{{$product->name}}</h4>
                            <span>  {{ \Illuminate\Support\Str::limit($product->detail, $limit = 150, $end = '...') }}</span>
                        </div>
                        <div class="social">
                                </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section><!-- End Team Section -->


    <!-- Funfact Section Start Here -->
    <div class="funfact-section d-flex flex-column justify-content-center">
        <div class="container-fluid p-0">
            <div class="row no-gutters counters align-items-center">
                <div class="col-lg-3 col-6">
                    <div class="single-fun-fact-wrap" data-aos="fade-up" data-aos-delay="100">
                        <div class="counter-area">
                            <strong class="counter">102</strong>
                        </div>
                        <div class="counter-content">
                            <h3 class="title">Active Projects</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 item">
                    <div class="single-fun-fact-wrap" data-aos="fade-up" data-aos-delay="300">
                        <div class="counter-area">
                            <strong class="counter">5700</strong><span class="text-white ml-2">+</span>
                        </div>
                        <div class="counter-content">
                            <h3 class="title">Projects Done</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="single-fun-fact-wrap" data-aos="fade-up" data-aos-delay="600">
                        <div class="counter-area">
                            <strong class="counter">98</strong><span class="text-white ml-2">%</span>
                        </div>
                        <div class="counter-content">
                            <h3 class="title">Happy Clients</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="single-fun-fact-wrap" data-aos="fade-up" data-aos-delay="900">
                        <div class="counter-area">
                            <strong class="counter">23,045</strong>
                        </div>
                        <div class="counter-content">
                            <h3 class="title">Working Hours</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Funfact Section End Here -->
    <!-- Portfolio Section Start Here -->
    <div class="portfolio-section pt-90">
        <div class="container">
            <div class="row">
                <div class="section-title text-center" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="title">Our Farms</h4>
                    <h5 class="sub-title">What are the source of our coffee</h5>
                </div>
            </div>
            <div class="row">
                {{!$delay=300}}
                @foreach($stations as $station)
                <div class="col-lg-4 col-sm-6 mt-30">

                    <div class="single-portfolio-wrap" data-aos="fade-up" data-aos-delay="{{$delay}}">
                        <figure class="portfolio-thumb hover-style position-relative m-0">
                            <a href="/front/station/{{$station->id}}">
                                <img src="{{$station->banner}}" alt="{{$station->name}}">
                                <div class="overlay-1"></div>
                            </a>
                            <figcaption class="portfolio-details">
                                <div class="port-info">
                                    <h3 class="title"><a href="/front/station/{{$station->id}}">{{$station->name}}</a></h3>
                                    <nav class="nav portfolio-cate">
                                        <a href="/front/station/">All Stations</a>
                                        <span>&nbsp;/&nbsp;</span>
                                        <a href="/front/station/{{$station->id}}">{{$station->name}}</a>
                                    </nav>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                    {{! $delay=$delay+300}}
                @endforeach

            </div>
        </div>
    </div>
    <!-- Portfolio Section End Here -->
    <!-- Testimonial Section Start Here -->
    <div class="testimonial-section pt-90 pb-90 mt-90">
        <div class="container">
            <div class="row pb-3">
                <div class="section-title text-center" data-aos="fade-up" data-aos-delay="200" data-aos-anchor-placement="bottom bottom">
                    <h4 class="title">Testimonial</h4>
                    <h6 class="sub-title">What our clients say</h6>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-12">
                    <div class="single-slide-1 swiper-container" data-aos="fade-up" data-aos-delay="300">
                        <div class="swiper-wrapper">
                            <div class="testimonial swiper-slide">
                                <div class="testimonial-author-image">
                                    <img src="/front/assets/images/client/1.jpg" class="img-fluid rounded-circle" alt="Client">
                                </div>
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <span><strong>- Amelia Milly. HasTech</strong></span>
                                </div>
                            </div>
                            <div class="testimonial swiper-slide">
                                <div class="testimonial-author-image">
                                    <img src="/front/assets/images/client/2.jpg" class="img-fluid rounded-circle" alt="Client">
                                </div>
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, pharetra nec ex.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <span><strong>- Catherine Kitty. HasTech</strong></span>
                                </div>
                            </div>
                        </div>
                        <!-- Slider pagination -->
                        <div class="swiper-pagination default-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End Here -->
    <!-- Blog Section Start Here -->
    <div class="blog-section pt-90">
        <div class="container">
            <div class="row">
                <div class="section-title text-center mb-8" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="title">Blog</h3>
                    <h4 class="sub-title">Some Excellent information from our Editor</h4>
                </div>
            </div>
            <div class="row mb-n10">
                @foreach($blogs as $blog)
                <div class="col-md-4 mb-10">
                    <!-- Single Blog Post Start -->
                    <div class="single-blog-post-wrap" data-aos="fade-up" data-aos-delay="{{$delay+=300}}">
                        <div class="blog-thumbnail">
                            <a href="/front/blog/{{$blog->id}}">
                                <img class="fit-image" src="{{$blog->photo}}" alt="{{$blog->title}}">
                                <img class="btn-plus" src="/front/assets/images/icon/plus.svg" alt="Read More detail">
                            </a>
                        </div>
                        <div class="blog-post-details pt-5">
                            <h3 class="title">
                                <a href="/front/blog/{{$blog->id}}">{{$blog->title}}</a>
                            </h3>
                            <div class="post-meta mb-3 mt-3">
                                <a href="/front/blog"><i class="fa fa-user"></i> Admin</a>
                                <span><i class="fa fa-clock-o"></i> {{$blog->created_at->diffForHumans()}}</span>
                            </div>
                            <p class="desc-content mb-2 mb-md-5">{{ \Illuminate\Support\Str::substr($blog->detail,0,250)}}...</p>
                            <a href="/front/blog/{{$blog->id}}" class="btn btn-hover-primary read-more">Keep Reading</a>
                        </div>
                    </div>
                    <!-- Single Blog Post End -->
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Blog Section End Here -->
    <!-- Support Section Start Here -->
    <div class="support-area bg-light pt-90 pb-90 mt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="support-wrapper" data-aos="fade-up" data-aos-delay="300">
                        <div class="section-title text-center">
                            <h1 class="title">Want to Test Our Coffee ?</h1>
                            <p class="mt-5 mb-5 pb-3">Feel Free to Send a Sample Request here </p>
                        </div>
                        <div class="support-button">
                            <a class="btn btn-dark btn-hover-primary" href="#"  data-toggle="modal" data-target="#sampleModal">Send a Sample Request</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Support Section End Here -->
  @include('admin.inc.footer')


    <!-- Scroll Top Start Here -->
    <a href="/front#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fa fa-angle-double-up"></i>
        <i class="arrow-bottom fa fa-angle-double-up"></i>
    </a>
    <!-- Scroll Top End Here -->

    <!-- Global Vendor, plugins JS -->

    <!-- Vendors JS -->
    <!--
<script src="/front/assets/js/vendor/vendor.min.js"></script>
<script src="/front/assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="/front/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="/front/assets/js/vendor/modernizr-3.11.2.min.js"></script>
-->

    <!-- Plugins JS -->
    <!--
<script src="/front/assets/js/plugins/splitting.min.js"></script>
<script src="/front/assets/js/plugins/swiper-bundle.min.js"></script>
<script src="/front/assets/js/plugins/waypoints.min.js"></script>
<script src="/front/assets/js/plugins/counter.min.js"></script>
<script src="/front/assets/js/plugins/aos.min.js"></script>
<script src="/front/assets/js/plugins/jquery.magnific-popup.min.js"></script>
<script src="/front/assets/js/plugins/jquery.vide.min.js"></script>
<script src="/front/assets/js/plugins/masonry.min.js"></script>
<script src="/front/assets/js/plugins/theia-sticky-sidebar.min.js"></script>
<script src="/front/assets/js/plugins/nice-select.min.js"></script>
<script src="/front/assets/js/plugins/jquery.ajaxchimp.min.js"></script>
<script src="/front/assets/js/plugins/jquery-ui.min.js"></script>
-->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="/front/assets/js/vendor/vendor.min.js"></script>
    <script src="/front/assets/js/plugins/plugins.min.js"></script>

    <!--Main JS-->
    <script src="/front/assets/js/main.js"></script>
    <script>
$('header').addClass('header-transparent');
$('header').removeClass('position-relative');

        </script>
</body>

</html>
