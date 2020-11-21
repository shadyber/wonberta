<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wonberta @yield('title')</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Multi</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      @include('admin.inc.front_nav')

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Home</a></li>
          <li>@yield('title')</li>
        </ol>
        <h2>@yield('title')</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
       
        @yield('content')
      </div>
    </section>

  </main><!-- End #main -->

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
            <form action="/message" method="post" role="form" class="php-email-form">
                {{  Form::token()  }}
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