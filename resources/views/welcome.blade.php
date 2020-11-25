<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', ' Wonberta General Import and Export') }} General Import &amp; Export plc.</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

  <meta content="title" name="wonberta general import and export company ">
  <meta content="description" name="{{$about->about}}wonberta,coffee,export,import,ethiopia,best company">

  <!-- Favicons -->
  <link href="/logo.ico" rel="icon">
  <link href="/logo.ico" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="/front/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/front/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="/front/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/front/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/front/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/front/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/front/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/front/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/front/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Multi - v2.1.0
  * Template URL: https://bootstrapmade.com/multi-responsive-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

@include('admin.inc.front_nav')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">
          {{$i=0 }}
      @foreach($slides as $slide)
{{$i++}}
        <!-- Slide {{$slide->id }} -->
        <div class="carousel-item @if($i==1)active @endif " style="background-image: url('{{$slide->photo}}')">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown"> {{$slide->title}}</h2>
              <p class="animate__animated animate__fadeInUp">{{$slide->subtitle}}</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>
          @endforeach

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>About Us</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>

                {!!html_entity_decode($about->about)!!}
            </p>

          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
                <h4>Backgound</h4>
                {!!html_entity_decode($about->backgound)!!}
            </p>
            <a href="#why-us" class="btn-learn-more"> Learn More </a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("{{$about->photo}}");' data-aos="zoom-in" data-aos-delay="100">
            <a href="https://www.youtube.com/watch?v=jMWLMUcCGTw" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>Company  <strong>Profile</strong></h3>
            <p>  </p>

            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>+</span>Vision<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                    <p>
                        <h4>Vision</h4>
                        {!!html_entity_decode($about->vision)!!}
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>+</span>Mission <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                    <h4>Misssion</h4>
                      <p>
                        {!!html_entity_decode($about->vision)!!}
                      </p>

                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>+</span> Value <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
<h4>Value</h4>
                      <p>
                        {!!html_entity_decode($about->value)!!}
                      </p>

                  </div>
                </li>

              </ul>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check our Services</p>
        </div>
          <div class="row">
          @foreach($services as $service)

                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                      <div class="icon-box">
                          <div class="icon"><i class="{{$service->icon}}"></i></div>
                          <h4><a href="">{{$service->name}}</a></h4>
                          <p>{{$service->detail}}</p>
                      </div>
                  </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Stations</h2>
          <p>Stations</p>
        </div>

        <div class="owl-carousel testimonials-carousel">

            @foreach($stations as $station)
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{$station->banner}}" class="testimonial-img" alt="{{$station->name}}">
              <h3>{{$station->name}}</h3>
              <h4>{{$station->size}}m<sup>2</sup></h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                 <a href="/front/station/{{$station->id}}">   {{ \Illuminate\Support\Str::limit($station->detail, $limit = 250, $end = '...') }}</a>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
            @endforeach


        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Send a Sample Request</h3>
          <p> You can Order a Sample Online for Test</p>
          <a class="cta-btn" href="#" data-toggle="modal" data-target="#sampleModal">Order a Sample</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="gallery" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Photo Gallery</h2>
          <p>Check our Photo</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">

              <li data-filter="*" class="filter-active">All</li>
                @foreach($albums as $album)
              <li data-filter=".album{{$album->id}}">{{$album->name}}</li>
                @endforeach



            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            @foreach($photos as $photo)
          <div class="col-lg-4 col-md-6 portfolio-item album{{$photo->album_id}}">
            <img src="{{$photo->photo}}" class="img-fluid" alt="{{$photo->title}}">
            <div class="portfolio-info">
                <h4>{{$photo->title}}</h4>
              <a href="{{$photo->photo}}" data-gall="portfolioGallery" class="venobox preview-link" title="{{$photo->title}}"><i class="bx bx-plus"></i></a>

            </div>
          </div>
            @endforeach
        </div>

      </div>
      <section class="white">
        <div class="container" data-aos="zoom-in">

        <div class="text-center">
        <a class="cta-btn btn-get-started border-bottom" href="/gallery" >More Photo</a>
        </div>
    </div>
</section>
    </section><!-- End Portfolio Section -->
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


      <section id="modalsection">
<!-- Modal -->
<div id="sampleModal" class="modal fade" role="dialog">
    <div class="modal-dialog border-left-success">
      <!-- Modal content-->
      <div class="modal-content border-left-primary">
        <div class="modal-header">

          <h4 class="modal-title">Apply to this Project</h4> <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">



<form action="/order" method="post" class="form-horizontal">
@csrf
<div class="row">


              <div class="col-6 col-sm-6 col-md-6 form-group ">
                 First Name
                  <input type="text" class="form-control " name="f_name" placeholder="your Name" value="" >

              </div>


              <div class="col-6 col-sm-6 col-md-6 form-group ">
               Last Name
                <input type="text" class="form-control " name="l_name" placeholder="Your Last Name" value="" >

            </div>
</div>
            <div class="col-12 col-sm-12 col-md-12 form-group ">
                Email
                <input type="email" class="form-control " name="email" placeholder="your Primary Email" value="" required >

            </div>

            <div class="col-12 col-sm-12 col-md-12 form-group ">
                Phone Number
                <input type="tel" class="form-control " name="tel" placeholder="your Primary Phone" value="" >

            </div>

    <div class="col-12 col-sm-12 col-md-12 form-group ">
       Shipping Address
        <input type="text" class="form-control " name="address" placeholder="Where Should we Deliver" value="" >

    </div>

            <div class="col-12 col-sm-12 col-md-12 form-group ">
               Select Product
                <select class="form-control" name="product_id" placeholder="Select Product" required>
                    @foreach($products as $product)
                    <option value="{{$product->id}}">{{ $product->name }}</option>
                    @endforeach
                </select>

            </div>



            <div class="col-12 col-sm-12 col-md-12 form-group ">
                Select Variety
                <select class="form-control " name="order_varity" placeholder="Select Varity"value="" >

<option> washed</option>
<option> unwashed</option>

                </select>

            </div>




            <div class="col-12 col-sm-12 col-md-12 form-group ">
                Select Grade
                <select class="form-control " name="order_grade" placeholder="Select Grade"value="" >

                    <option>Grade 1</option>
                    <option>Grade 2</option>
                    <option>Grade 3</option>
                    <option>Grade 4</option>
                    <option>Grade 5</option>
                </select>

            </div>



              <div class="col-12 col-sm-12 col-md-12 form-group ">
                  <label class="control-label">Message:</label>
                  <textarea class="form-control " rows="2" cols="75" name="application_letter" placeholder="Any Message"></textarea>

              </div>

<button type="reset" value="Close" class="btn btn-danger">Reset</button>
<button type="submit" value="Send Order" class="btn btn-warning">Send Order</button>
</form>


        </div>

      </div>
    </div>
</div>
</section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>{{$address->address1}}</p>
                  <p>{{$address->address2}}</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>{{$address->email}}<br>
                      {{$address->address2}}
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>{{$address->tel}}<br>{{$address->tel2}}</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">


            <form action="/message" class="php-email-form" method="post">
               @csrf
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>


              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>


              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>

              <div class="text-center"><button type="submit">Send Message</button></div>

            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@include('admin.inc.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="/front/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/front/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/front/assets/vendor/php-email-form/validate.js"></script>
  <script src="/front/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="/front/assets/vendor/counterup/counterup.min.js"></script>
  <script src="/front/assets/vendor/venobox/venobox.min.js"></script>
  <script src="/front/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="/front/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/front/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="/front/assets/js/main.js"></script>

</body>

</html>
