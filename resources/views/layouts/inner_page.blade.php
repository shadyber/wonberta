
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ config('app.name', ' Wonberta General Import and Export') }} | @yield('title') > @yield('subtitle')</title>
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

</head>

<body>
<body>
<div id="preloader">
    <div class="preloader">
        <div class="spinner-border text-primary"></div>
    </div>
</div>



@include('admin.inc.front_nav')
<!-- Header Area End Here -->


<!-- Breadcrumb Area Start Here -->
<div class="breadcrumbs-area position-relative mb-text-p bg-gradient">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title">@yield('title')</h3>
                    <ul>
                        <li><a href="/">@yield('title')</a></li>
                        <li>@yield('subtitle')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->



 <section id="view">
     <main id="app">
         @yield('content')
     </main>
 </section>


@include('admin.inc.footer')
<!-- Scroll Top Start Here -->
<a href="#" class="scroll-top" id="scroll-top">
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
@yield('scripts')
</body>

</html>
