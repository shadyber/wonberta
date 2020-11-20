<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3>{{$about->name}}</h3>
                        <p class="pb-3"><em>
                            {{ \Illuminate\Support\Str::limit($about->about, $limit = 150, $end = '...') }}

                        </em></p>
                        <p>
                            {{$address->address1}} <br>
                            {{$address->address2}}<br><br>
                            <strong>Phone:</strong> {{$address->tel}}<br>
                            <strong>Email:</strong> {{$address->tel2}}<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="{{$address->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="{{$address->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="{{$address->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="{{$address->google}}" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="{{$address->linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="/#about">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="/#services">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="/w_admin">Admin Portal</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Import</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Export</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Transport</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to Get Email Message from us</p>
                    <form action="/subscribe" method="post" class="php-email-form">

                        <input type="email" name="email" class="form-controll">

                        <div class="sent-message">Your Email is Saved. Thank you!</div>

                        <input type="submit" value="Subscribe">
                    </form>

                </div>

            </div>
        </div>
    </div>






    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>{{$about->name}}</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: http://rootsystem.info -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: http://rootsystem.info -->
            Designed by <a href="http://rootsystem.info">root system</a>
        </div>
    </div>
</footer><!-- End Footer -->
