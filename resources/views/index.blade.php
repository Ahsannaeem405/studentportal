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


    .modal-backdrop.show {
    opacity: .5;
}

        .modal-backdrop {
            position: relative !important;
            top: 0;
            left: 0;
            z-index: 1050;
            width: 100vw;
            height: 100vh;
            background-color: #000;
        }
        .modal {
    position: fixed !important;
    top: 0;
    left: 0;
    z-index: 1055;
    display: none;
    width: 100%;
    height: 100%;
    overflow-x: hidden;
    overflow-y: auto;
    outline: 0;
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
            <img src="{{asset('images/child-abuse.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>gang facts did you know?</h3>
            <p class="fst-italic">
                Once viewed as a metropolitan issue, gang savagery has spread to more modest urban communities, towns, and rustic regions.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>There are in excess of 24,500 distinct youth gangs around the country, with in excess of 772,500 teen and youthful grown-up individuals.</li>
              <li><i class="bi bi-check-circle"></i>A pack is characterized collectively of individuals who participate in joint rough, unlawful, or crime.</li>
              <li><i class="bi bi-check-circle"></i> Posses as a rule distinguish themselves with a typical name and images. </li>
            </ul>
            <p>
                Examination has assessed that young people who are gangsters are bound to perpetrate genuine and savage violations and are bound to be survivors of manslaughter than non-gangsters. There has been a lofty expansion in group movement in the US since the 1970's, however starting around 1996 pack enrollment has diminished besides in urban areas with populaces of more than 25,000. The normal period of gangsters is around 17 to 18 years. Around half of all gangsters are 18 or more established; these more seasoned gangsters are substantially more liable to be engaged with genuine and rough wrongdoings. Females are less inclined to be associated with posses than guys, in any case, one 11-city study of eighth-graders observed that 38% of gangsters were female. Further examination has shown that 78% of female gangsters have been associated with pack battles and 39 percent have assaulted somebody with a weapon. Young people join posses for a many reasons, including energy and a feeling of having a place. Ideas are presented for getting teens far from groups, like tracking down sure ways of investing energy, keeping away from gangsters, and not conveying weapons. Accommodating connections are presented for more data about posses and how to avoid them.

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
              <p> <br>
                24/7 advisors to speak to !
                you maybe thinking about joining a gang just to feel like you have a place , a gang is not a real home , you might be thinking of retaliating
after someone embarrassed you , you might be even be thinking to take your own life ,
              </p>
              <div class="text-center">
                <a href="{{url('about')}}" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 col-md-12 col-sm-12 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>                    <iframe style="width:100%; height:70%" src="https://www.youtube.com/embed/siFPHXxYCZI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </h4>
                  </div>
                </div>
                <div class="col-xl-4  col-md-12 col-sm-12 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4><iframe style="width:100%; height:70%" src="https://www.youtube.com/embed/xKljINIUn6Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></h4>

                  </div>
                </div>
                <div class="col-xl-4 col-md-12 col-sm-12 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4><iframe style="width:100%; height:70%" src="https://www.youtube.com/embed/uMqLq8iOURE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></h4>
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

    <?php

    try {
        $pdo =   pdo();
        $sql = 'SELECT * FROM users WHERE role = 1';

        $q = $pdo->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Could not connect to the database $dbname :" . $e->getMessage());
    }

    ?>



    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Advisors</h2>
            {{-- <p>Popular Courses</p> --}}
          </div>

          <div class="row" data-aos="zoom-in" data-aos-delay="100">

            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <?php while ($row = $q->fetch()): ?>




            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">

                    {{-- <img src="{{asset($row['img'])}}" class="img-fluid" alt=""> --}}
                    <img src="images/<?php echo $row['img']?>" style="max-height: 58%; height: 58%;width: 100%;max-width: 100%;min-width: 100%;min-height: 58%;">
                    <div class="member-content">
                        <h4><?php echo htmlspecialchars($row['name']); ?></h4>
                        <span><?php echo htmlspecialchars($row['email']); ?></span>

                        <div class="social">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal<?php echo htmlspecialchars($row['id']); ?>"">
                                Ask for Appointment
                            </button>






                        </div>
                    </div>
                </div>
            </div>





            <?php endwhile; ?>





        </div>
      </div>


    </section><!-- End Trainers Section -->






  </main><!-- End #main -->


  <?php

  try {
      $pdo =   pdo();
      $sql11 = 'SELECT * FROM users WHERE role = 1';

      $q = $pdo->query($sql11);
      $q->setFetchMode(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
      die("Could not connect to the database $dbname :" . $e->getMessage());
  }

  ?>


  <?php while ($row = $q->fetch()): ?>

  <div class="modal fade" style="" id="exampleModal<?php echo htmlspecialchars($row['id']); ?>"
    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="margin-top: 58px;">
            <form action="{{ route('appointment') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">Advisors</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="container">
                        <select name="advis" id="" class="form-control">
                            <option value="">Current Advisor</option>
                            <option value="<?php echo htmlspecialchars($row['name']); ?>"><?php echo htmlspecialchars($row['name']); ?></option>

                        </select><br>
                        <label for="">Start Time</label>
                        <input type="time" name="start_time" class="form-control"><br>
                        <label for="">End Time</label>
                        <input type="time" name="end_time" class="form-control"><br>
                        <label for="">Date ofAppointment</label>
                        <input type="date" name="date" class="form-control"><br>
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>" id="">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Set Appointments</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php endwhile; ?>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
    $(document).ready(function () {


        $('.nav-item').removeClass("active1");
    $('#homee').addClass("active1");


    });
</script>

@endsection


