  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/"><img src="/img/logo.svg" alt="Wonberta Logo"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="/front/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="/#about">About</a></li>
          <li><a href="/#services">Services</a></li>
          <li><a href="/#gallery">Gallery</a></li>
          <li><a href="/#products">Products</a></li>
            <li class="drop-down"><a href="/front/station">Stations</a>
                <ul>
                    @foreach($stations as $station)
                    <li><a href="/front/station/{{$station->id}}">{{$station->name}}</a></li>
                    @endforeach

                </ul>
            </li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#about" class="get-started-btn"  data-toggle="modal" data-target="#sampleModal">Sample Order</a>

    </div>
  </header><!-- End Header -->
