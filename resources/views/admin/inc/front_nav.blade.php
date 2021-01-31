

    <!-- Header Area Start Here -->
    <header class="main-header-area  header-sticky  position-relative">
        <!-- Main Header Area Start -->
        <div class="main-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-xl-2 col-md-6 col-6">
                        <div class="header-logo d-flex align-items-center">
                            <a href="/">
                                <img class="nonsticky-logo img-full" src="/img/logo.svg" alt="Our Logo">
                                <img class="sticky-logo img-full" src="/img/logo.svg" alt="Header Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-6 col-6 d-flex justify-content-end">
                        <nav class="main-nav d-none d-lg-flex">
                            <ul class="nav">
                                <li>
                                    <a class="active" href="/">
                                        <span class="menu-text"> Home</span>

                                    </a>

                                </li>
                                <li>
                                    <a href="#about">
                                        <span class="menu-text">About</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#service">
                                        <span class="menu-text"> Service</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/front/station">
                                        <span class="menu-text"> Station</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-submenu dropdown-hover">
                                        @foreach(\App\Models\Station::allStations() as $station)
                                        <li><a href="/front/station/{{$station->id}}">{{$station->name}}</a></li>
                                        @endforeach



                                    </ul>
                                </li>
                                <li>
                                    <a href="/front/blog">
                                        <span class="menu-text"> Blog</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-submenu dropdown-hover">

                                        @foreach(App\Models\Blog::allBlogs() as $blog)
                                        <li><a href="/front/blog/{{$blog->id}}">{{$blog->title}}</a></li>
                                               @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="/gallery">
                                        <span class="menu-text">Gallery</span>
                                    </a>
                                </li>    <li>
                                    <a href="/contact">
                                        <span class="menu-text">Contact</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#sampleModal">
                                        <span class="menu-text btn btn-primary btn-sm">Request a Sample</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="header-right-area main-nav">
                            <ul class="nav">
                                <li class="account-menu-wrap d-none d-lg-flex">
                                    <a href="/#" class="off-canvas-menu-btn">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>

                                <li class="search-box-menu d-block d-lg-none">
                                    <a href="/#" class="off-canvas-search-btn">
                                        <span class="btn-search"><i class="fa fa-search"></i></span>
                                    </a>
                                </li>
                                <li class="mobile-menu-btn d-block d-lg-none">
                                    <a class="off-canvas-btn" href="/front#">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header Area End -->
        <!-- off-canvas mobile menu start -->
        <aside class="off-canvas-wrapper" id="mobileMenu">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="btn-close-off-canvas">
                    <i class="fa fa-times"></i>
                </div>
                <div class="off-canvas-inner">
                    <div class="offcanvas-widget-area">
                        <!-- Start Serach Box -->
                        <div class="search-box-wrap off-canvas-item">
                            <form action="#" method="post">
                                <input placeholder="Search..">
                                <button class="btn-search"><i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- End Search Box -->
                        <!-- mobile menu start -->
                        <div class="mobile-navigation">
                            <!-- mobile menu navigation start -->
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children"><a href="/#">Home</a>

                                    </li>
                                    <li><a href="/#about">About</a></li>
                                    <li><a href="/#service">Service</a></li>
                                    <li class="menu-item-has-children"><a href="/front#">Portfolio</a>
                                        <ul class="dropdown">
                                            <li><a href="/frontportfolio.html">Portfolio One</a></li>
                                            <li><a href="/frontportfolio-2.html">Portfolio Two</a></li>
                                            <li><a href="/frontportfolio-details.html">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="/front#">Blog</a>
                                        <ul class="dropdown">
                                            <li><a href="/frontblog.html">Blog</a></li>
                                            <li><a href="/frontblog-left-sidebar.html">Blog Left Sidebar</a></li>
                                            <li><a href="/frontblog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/frontcontact.html">Contact</a></li>
                                </ul>
                            </nav>
                            <!-- mobile menu navigation end -->
                        </div>
                        <!-- mobile menu end -->
                        <!-- Soclial Link Start -->
                        <div class="widget-social">
                            <a title="Facebook" href="/front#"><i class="fa fa-facebook-f"></i></a>
                            <a title="Twitter" href="/front#"><i class="fa fa-twitter"></i></a>
                            <a title="Linkedin" href="/front#"><i class="fa fa-linkedin"></i></a>
                            <a title="Youtube" href="/front#"><i class="fa fa-youtube"></i></a>
                            <a title="Vimeo" href="/front#"><i class="fa fa-vimeo"></i></a>
                        </div>
                        <!-- Social Link End -->
                    </div>
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
        <!-- Offcanvas Serach Start -->
        <aside class="off-canvas-search-wrapper">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="off-canvas-inner">
                    <form action="#" method="post">
                        <input type="search" placeholder="Search..">
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </aside>
        <!-- Offcanvas Search End -->


        <!-- off-canvas menu start -->
        <aside class="off-canvas-menu-wrapper" id="sideMenu">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="off-canvas-inner">
                    <!-- offcanvas widget area start -->
                    <div class="offcanvas-widget-area">
                        <!-- Start Serach Box -->
                        <div class="search-box-wrap off-canvas-item">
                            <form action="/search" method="get">
                                <input name="key" placeholder="Search..">
                                <button class="btn-search"><i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- End Search Box -->
                        <ul class="menu-top-menu">
                            <li><span>Who We Are</span></li>
                        </ul>
                        <p class="desc-content">{{\Illuminate\Support\Str::substr($about->about,0,300)}}</p>
                        <ul class="useful-link">
                            <li><a href="/home">Home</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/gallery">Gallery</a></li>
                            <li><a href="/front/stations">Our Farms</a></li>
                            <li><a href="/front/about">About Us</a></li>
                        </ul>
                        <div class="widget-social">
                            <ul class="menu-top-menu">
                                <li><span>Connect With Us</span></li>
                            </ul>
                            <a title="Facebook" href="{{$address->facebook}}"><i class="fa fa-facebook-f"></i></a>
                            <a title="Twitter" href="{{$address->twitter}}"><i class="fa fa-twitter"></i></a>
                            <a title="Linkedin" href="{{$address->linkedin}}"><i class="fa fa-linkedin"></i></a>
                            <a title="Youtube" href="{{$address->youtube}}"><i class="fa fa-youtube"></i></a>
                            <a title="Pintrest" href="{{$address->facebook}}"><i class="fa fa-pintrest"></i></a>
                        </div>
                    </div>
                    <!-- offcanvas widget area end -->
                </div>
                <div class="btn-close-off-canvas">
                    <i class="fa fa-times"></i>
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
    </header>
