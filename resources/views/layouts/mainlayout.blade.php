<!DOCTYPE html>
<html lang="en">

<head>
    @section('css_link')
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
@section('title')
  <title>Student_Portal</title>
  @show
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">



  @show
</head>
<style>
        .active1{
        background: white !important;

    border-radius: 13px !important;
    padding: 10px 20px 10px 20px !important;
    color: #0C4879 !important;
    }

</style>

<body>
     <!-- ======= Header ======= -->
     @section('header')
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="{{url('/index')}}" class=" logo me-auto navbar-brand"><img src="{{asset('images/Student-Portal.png')}}" alt="" style="max-height: 70px"></a>








      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li class="nav-item"><a href="{{url('/index')}}" id="homee" class=" nav-link">Home</a></li>
          <li  class="nav-item"><a href="{{url('/about')}}" id="About"  class="nav-link" >About</a></li>
          <li  class="nav-item"><a href="{{url('/contact')}}" id="Contact" class="nav-link">Contact us</a></li>
          <li  class="nav-item"><a href="{{url('/privacy')}}" id="Rules" class="nav-link">Rules</a></li>


          @if (Auth::check())
          @if (Auth::user()->role == 1)
          <li  class="nav-item"><a  href="{{url('/advisor_booking')}}" class="nav-link" id="Advisor">Advisor Booking</a></li>
          @else
          <li  class="nav-item"><a href="{{url('/booking')}}" class="nav-link" id="Booking">Booking</a></li>

          @endif
          <li  class="nav-item"><a href="{{url('/profile')}}" id="Profie" class="nav-link">Profie</a></li>

          <li  class="nav-item">

            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                class="d-none">
                @csrf
            </form>

        </li>
        @else

        <li class="nav-item"><a class="nav-link"  id="login" href="{{url('/login')}}">Login</a></li>

          @endif



        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


      @if (!Auth::check())


    <a href="{{url('/register')}}" id="Join" class="get-started-btn">Join Us</a>

    @endif
    </div>
  </header>

@show

@yield('content')
@section('footer')
 <!-- ======= Footer ======= -->
 <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <img src="{{asset('images/Student-Portal.png')}}" alt="" style="max-height: 100px">
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-5 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="{{url('/index')}}">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{url('/about')}}">About</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{url('/contact')}}">Contact us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{url('/privacy')}}">Rules</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{url('/advisor')}}">Advisors</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{url('/login')}}">Login</a></li>
            </ul>
          </div>



          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>

      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>StudentPortal</span></strong>. All Rights Reserved
        </div>
        <div class="credits">

          Designed by <a href="http://browntech.co/">Browntech.Int</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
  @show

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>


</body>
</html>
