
<!-- Footer Section Start Here -->
<footer class="footer-section pt-90">
    <div class="footer-widget-area">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-custom">
                    <div class="single-footer-widget m-0" data-aos="fade-up" data-aos-delay="300" data-aos-anchor-placement="bottom bottom">
                        <div class="footer-logo pb-3">
                            <a href="/">
                                <img src="/img/logo.svg" alt="{{$about->logo}}">
                            </a>
                        </div>
                        <p class="desc-content pt-3 pb-3">  {{ \Illuminate\Support\Str::limit($about->about, $limit = 150, $end = '...') }}</p>
                        <p>
                           <i class="fa fa-location-arrow"></i> {{$address->address1}} <br>
                           <i class="fa fa-location-arrow"></i> {{$address->address2}}<br><br>
                            <strong><i class="fa fa-phone"></i>:</strong> {{$address->tel}}<br>
                            <strong><i class="fa fa-mobile"></i>:</strong> {{$address->tel2}}<br>
                        </p>
                        <!-- Soclial Link Start -->
                        <div class="widget-social pt-4">
                            <a title="Facebook" href="{{$address->facebook}}" targer="_blank"><i class="fa fa-facebook-f"></i></a>
                            <a title="Twitter" href="{{$address->twitter}}"><i class="fa fa-twitter"></i></a>
                            <a title="Linkedin" href="{{$address->linkedin}}"><i class="fa fa-linkedin"></i></a>
                            <a title="Youtube" href="{{$address->youtube}}"><i class="fa fa-youtube"></i></a>
                            <a title="pintrest" href="{{$address->pintrest}}"><i class="fa fa-pintrest"></i></a>
                        </div>
                        <!-- Social Link End -->


                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-custom">
                    <div class="single-footer-widget" data-aos="fade-up" data-aos-delay="400" data-aos-anchor-placement="bottom bottom">
                        <h2 class="widget-title">Our Servcie</h2>
                        <ul class="widget-list pt-3">

                            <li><a href="#">Import</a></li>
                            <li><a href="#">Export</a></li>
                            <li><a href="#">Transport</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-2 col-custom">
                    <div class="single-footer-widget" data-aos="fade-up" data-aos-delay="500" data-aos-anchor-placement="bottom bottom">
                        <h2 class="widget-title">Quicklink</h2>
                        <ul class="widget-list pt-3">
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/help">Help Center</a></li>
                            <li><a href="/gallery">Gallery</a></li>
                            <li><a href="/contact">Contact Us</a></li>
                            <li><a href="/sample">Request Sample</a></li>
                            <li><a href="/dashboard">Admin Portal</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-3 col-custom">
                    <div class="single-footer-widget" data-aos="fade-up" data-aos-delay="600" data-aos-anchor-placement="bottom bottom">
                        <h2 class="widget-title">Get in Touch</h2>
                        <div class="widget-body pt-3">
                            <p class="desc-content pb-3">Enter your email and receive the latest news from us.</p>
                            <div class="newsletter-form-wrap pt-4 php-email-form">
                                <form id="mc-form" class="mc-form d-flex position-relative" action="/subscribe" method="post">
                                    <input type="email" id="mc-email" class="form-control email-box rounded-0" placeholder="email@example.com" name="email">
                                    <button id="mc-submit" class="btn newsletter-btn position-absolute" type="submit"><i class="fa fa-envelope"></i></button>
                                    <input type="submit" value="Subscribe" class="btn btn-primary">
                               </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                                </div>
                                <!-- mailchimp-alerts end -->
                                <img src="/img/sprite02.png" class="img img-responsive" alt="partners" />

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-area pt-5 border-top mt-90 mb-5">
        <div class="container custom-area">
            <div class="row">
                <div class="col-12 text-center col-custom">
                    <div class="copyright-content">
                        <p class="mb-0">Copyright © 2021 <a href="http://www.wonberta.com">Wonberta</a> | Built with&nbsp;<strong>root system</strong>&nbsp;by <a href="https://rootsystem.info">root system</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End Here -->



<section id="modalsection">



    <!-- Modal -->
    <div id="sampleModal" class="modal col-md-12" >
        <div class="modal-dialog  ">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Sample Request</h4> <button type="button" class="close btn-sm" data-dismiss="modal"><i class=" fa fa-times"></i></button>
                </div>

            </div>
        </div>

        <div class="contact-form-area bg-light pt-90 pb-90 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8">
                        <div class="contact-form">

                            <form action="/order" method="post" class="form-horizontal">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 col-12 mb-6">
                                        <input class="input-item" type="text" placeholder="First Name" name="f_name">
                                    </div>

                                    <div class="col-md-6 col-12 mb-6">
                                        <input class="input-item" type="text" placeholder="Last Name" name="l_name">
                                    </div>

                                    <div class="col-md-6 col-12 mb-6">
                                        <input class="input-item" type="email" placeholder="Email *" name="email" required>
                                    </div>

                                    <div class="col-md-6 col-12 mb-6">
                                        <input class="input-item" type="tel" placeholder="Telephone Number *" name="tel" required>
                                    </div>

                                    <div class="col-12 mb-6">
                                        <input class="input-item" type="text" placeholder="Shipping Address *" name="address" required>
                                    </div>
                                    <div class="col-md-4 col-6 mb-4">
                                        <select class="input-item" type="tel" placeholder="Product to Test" name="product_id" required>
                                            @foreach($products as $product)
                                                <option value="{{$product->id}}">{{ $product->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-4 col-6 mb-4">
                                        <select class="input-item" type="tel" name="order_varity" placeholder="Select Varity" value="" >

                                            <option> washed</option>
                                            <option> unwashed</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4 col-6 mb-4">
                                        <select class="input-item" type="tel"name="order_grade" placeholder="Select Grade" value="" >

                                            <option>Grade 1</option>
                                            <option>Grade 2</option>
                                            <option>Grade 3</option>
                                            <option>Grade 4</option>
                                            <option>Grade 5</option>
                                        </select>
                                    </div>

                                    <div class="col-12 mb-6">
                                        <textarea class="textarea-item" name="application_letter" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary btn-hover-dark">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


