@extends('layouts.mainlayout')

@section('title')
    <title>Advisors</title>
@endsection
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
@section('content')



    <style>
        .modal-backdrop {
            position: relative;
            top: 0;
            left: 0;
            z-index: 1050;
            width: 100vw;
            height: 100vh;
            background-color: #000;
        }


    </style>

    <main id="main" style="padding-top: 100px;">


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

                    @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif



                    <?php while ($row = $q->fetch()): ?>




                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">

                            {{-- <img src="{{asset($row['img'])}}" class="img-fluid" alt=""> --}}
                            @if(isset($row['img']))
                            <img src="images/<?php echo $row['img']?>" style="max-height: 58%; height: 58%;width: 100%;max-width: 100%;min-width: 100%;min-height: 58%;">
                            @else
                            <img src="images/avatar.png" style="max-height: 58%; height: 58%;width: 100%;max-width: 100%;min-width: 100%;min-height: 58%;">

                            @endif
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
                          <select name="advis" required id="" class="form-control">
                              <option value="">Current Advisor</option>
                              <option value="<?php echo htmlspecialchars($row['name']); ?>"><?php echo htmlspecialchars($row['name']); ?></option>

                          </select><br>
                          <label for="">Start Time</label>
                          <input required type="time" name="start_time" class="form-control"><br>
                          <label for="">End Time</label>
                          <input required type="time" name="end_time" class="form-control"><br>
                          <label for="">Date ofAppointment</label>
                          <input required type="date" name="date" class="form-control"><br>
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


  <script>
    $(document).ready(function () {


        $('.nav-item').removeClass("active1");
    $('#advisor').addClass("active1");


    });
</script>


@endsection
