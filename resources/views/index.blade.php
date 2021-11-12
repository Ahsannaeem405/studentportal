@extends('layouts.mainlayout')

@section('title')
<title>Home</title>
@endsection
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">


<style>
    .btn_seeall{
        padding-right:50px !important;
        padding-left: 50px !important;
    }

</style>
  @section('content')

  {{-- Slider start --}}
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="margin-bottom:20px; ">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('images/slider1.jpg')}}" class="d-block w-100" alt="..." style="max-height: 600px !important;">
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/slider1.jpg')}}" class="d-block w-100" alt="..." style="max-height: 600px !important;">
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/slider1.jpg')}}" class="d-block w-100" alt="..." style="max-height: 600px !important;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  {{-- Slider end --}}

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <div class="container">
        <section id="counts" class="counts section-bg">
            <div class="container">

              <div class="row counters">

                <div class="col-lg-6 col-6 text-center">
                  <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter" style="color: #2179BB"></span>
                  <p>Users</p>
                </div>

                <div class="col-lg-6 col-6 text-center">
                  <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter" style="color: #2179BB"></span>
                  <p>Advisors</p>
                </div>

                {{-- <div class="col-lg-3 col-6 text-center">
                  <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Events</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                  <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Trainers</p>
                </div> --}}

              </div>

            </div>
          </section>
    </div>
   <!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose Our Advisors?</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
              </p>
              <div class="text-center">
                <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Ullamco laboris ladore pan</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Labore consequatur</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>FAQ's</h2>
            {{-- <p>Popular Courses</p> --}}
          </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="offset-md-1 col-lg-10 col-12"  style="border-bottom: 1px solid gray">
                <p>
                    {{-- <div class="card card-body"> --}}
                        <p data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            How can I tell my parents I feel depressed? <i class="fas fa-chevron-down " style="float: right"></i>
                        </p>
                        <div class="collapse" id="collapseExample" >
                            {{-- <div class="card card-body"> --}}
                                Even if you don't always get along, most parents are supportive and understanding when they know what's going on.
                            {{-- </div> --}}
                          </div>
                      {{-- </div> --}}
                    {{-- <a  data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                      Link with href
                    </a> --}}

                  </p>
            </div>
            <div class="offset-md-1 col-lg-10 col-12"  style="border-bottom: 1px solid gray">
                <p>
                    {{-- <div class="card card-body"> --}}
                        <p data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                            How can I take charge of my own medical care? <i class="fas fa-chevron-down " style="float: right"></i>
                        </p>
                        <div class="collapse" id="collapseExample2" >
                            {{-- <div class="card card-body"> --}}
                                Doctors recommend that we start getting involved in our medical care during our teens. It helps us be prepared to handle things as adults. And it can feel easier to share personal problems when it's just you and the doctor.
                            {{-- </div> --}}
                          </div>
                      {{-- </div> --}}
                    {{-- <a  data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                      Link with href
                    </a> --}}

                  </p>
            </div>
            <div class="offset-md-1 col-lg-10 col-12"  style="border-bottom: 1px solid gray">
                <p>
                    {{-- <div class="card card-body"> --}}
                        <p data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                            How can I take charge of my own medical care? <i class="fas fa-chevron-down " style="float: right"></i>
                        </p>
                        <div class="collapse" id="collapseExample3" >
                            {{-- <div class="card card-body"> --}}
                                Doctors recommend that we start getting involved in our medical care during our teens. It helps us be prepared to handle things as adults. And it can feel easier to share personal problems when it's just you and the doctor.
                            {{-- </div> --}}
                          </div>
                      {{-- </div> --}}
                    {{-- <a  data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                      Link with href
                    </a> --}}

                  </p>
            </div>



      </div>
    </section><!-- End Features Section -->




    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Advisors</h2>
            {{-- <p>Popular Courses</p> --}}
          </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Walter White</h4>
                <span>Web Development</span>
                <p>
                  Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                </p>
                <div class="social">
                 <button class="btn btn-primary">Book Now</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sarah Jhinson</h4>
                <span>Marketing</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
                <div class="social">
                    <button class="btn btn-primary">Book Now</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>William Anderson</h4>
                <span>Content</span>
                <p>
                  Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                </p>
                <div class="social">
                    <button class="btn btn-primary">Book Now</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12" style="text-align: center">
              <a href="{{url('/advisor')}}" class="btn btn-primary btn_seeall">See All</a>
          </div>

        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->
@endsection


