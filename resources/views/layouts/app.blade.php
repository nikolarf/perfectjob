<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
      <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
      <link rel="stylesheet" href="{{ asset('css/jquery.DonutWidget.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
      <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
      <link rel="stylesheet" href="{{ asset('css/main.css') }}">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            
      <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">          
      <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
</head>
<body>
    <!-- Start Header Area -->
      <header class="default-header">
        <nav class="navbar navbar-expand-lg  navbar-light">
          <div class="container">
              <a class="navbar-brand" href="/">
                <img src="{{ asset('img/logo_job.png') }}" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                <li><a href="#home">Home</a></li>
                @if (Auth::guest())
                      <li><a href="/login">Login</a></li>
                      <li><a href="/register">Register</a></li>
                @else
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->name }}
                          </a>

                          <ul class="dropdown-menu" role="menu">
                              <li>
                                  <a href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                          </ul>
                      </li>
                @endif
                </ul>
              </div>  
          </div>
        </nav>
      </header>
      <!-- End Header Area -->

      <!-- start banner Area -->
      <section class="banner-area relative" id="home" data-parallax="scroll" data-image-src="{{ asset('img/Hero_PJ2.jpg') }}">
        <div class="overlay-bg overlay"></div>
        <div class="container">
          <div class="row fullscreen  d-flex align-items-center justify-content-end">
            <div class="banner-content col-lg-6 col-md-12">
              <h1>
                Find <span> Jobs</span><br>
                & Career<br>
                 <span>Opportunities</span>             
              </h1>
              <a href="/email" class="primary-btn2 header-btn text-uppercase">Post a Job</a>&nbsp;&nbsp;
              <!--a href="#examples" class="primary-btn2 header-btn text-uppercase">View templates</a-->
            </div>                        
          </div>
        </div>
      </section>
      <!-- End banner Area -->  
      <!--Laravel-->
      <div class="container pt-30">
          @include('inc.messages')
          @yield('content')
      </div>
      <!--End Laravel-->
      <!-- Start testimonial Area -->
      <section class="testimonial-area relative section-gap">
        <div class="overlay overlay-bg"></div>
        <div class="container">
          <div class="row">
            <div class="active-testimonial">
              <div class="single-testimonial item d-flex flex-row">
                <div class="thumb">
                  <img class="img-fluid" src="{{ asset('img/user2.png') }}" alt="">
                </div>
                <div class="desc">
                  <p>
                    Without PerfectJob i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service
                  </p>
                  <h4 mt-30>Ivana, 32</h4>
                  <p>IT manager</p>
                </div>
              </div>
              <div class="single-testimonial item d-flex flex-row">
                <div class="thumb">
                  <img class="img-fluid" src="{{ asset('img/user1.png') }}" alt="">
                </div>
                <div class="desc">
                  <p>
                   Without PerfectJob i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service
                  </p>
                  <h4 mt-30>Stephanie, 37</h4>
                  <p>CEO at Google</p>
                </div>
              </div>
              <div class="single-testimonial item d-flex flex-row">
                <div class="thumb">
                  <img class="img-fluid" src="{{ asset('img/user2.png') }}" alt="">
                </div>
                <div class="desc">
                  <p>
                    Without PerfectJob i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service
                  </p>
                  <h4 mt-30>Vesna, 28</h4>
                  <p>Hairdresser</p>
                </div>
              </div>                
            </div>          
          </div>
        </div>  
      </section>
      <!-- End testimonial Area -->
      
      <!-- start footer Area -->    
      <footer class="footer-area section-gap">
        <div class="container">
          <div class="row">
            <div class="col-lg-3  col-md-12">
              <div class="single-footer-widget">
                <h6>Top Products</h6>
                <ul class="footer-nav">
                  <li><a href="#">Managed Website</a></li>
                  <li><a href="#">Manage Reputation</a></li>
                  <li><a href="#">Power Tools</a></li>
                  <li><a href="#">Marketing Service</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6  col-md-12">
              <div class="single-footer-widget newsletter">
                <h6>Newsletter</h6>
                <p>You can trust us. we only send promo offers, not a single spam.</p>
                <div id="mc_embed_signup">
                  <form target="_blank" novalidate="true" action="" method="get" class="form-inline">

                    <div class="form-group row" style="width: 100%">
                      <div class="col-lg-8 col-md-12">
                        <input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                        <div style="position: absolute; left: -5000px;">
                          <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                        </div>
                      </div> 
                    
                      <div class="col-lg-4 col-md-12">
                        <button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
                      </div> 
                    </div>    
                    <div class="info"></div>
                  </form>
                </div>    
              </div>
            </div>
            <div class="col-lg-3  col-md-12">
              <div class="single-footer-widget mail-chimp">
                <h6 class="mb-20">Instragram Feed</h6>
                <ul class="instafeed d-flex flex-wrap">
                  <li><img src="img/i1.jpg" alt=""></li>
                  <li><img src="img/i2.jpg" alt=""></li>
                  <li><img src="img/i3.jpg" alt=""></li>
                  <li><img src="img/i4.jpg" alt=""></li>
                  <li><img src="img/i5.jpg" alt=""></li>
                  <li><img src="img/i6.jpg" alt=""></li>
                  <li><img src="img/i7.jpg" alt=""></li>
                  <li><img src="img/i8.jpg" alt=""></li>
                </ul>
              </div>
            </div>            
          </div>

          <div class="row footer-bottom d-flex justify-content-between">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">PerfectCV</a></p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <div class="col-lg-4 col-sm-12 footer-social">
              <a href="#"><i class="fab fa-facebook-f" style="color:white;"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </footer>

    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- End footer Area -->    

    <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/parallax.min.js') }}"></script>      
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>      
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/jquery.DonutWidget.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>     
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
