@extends('layouts.mainlayout')

@section('title')
<title>Booking</title>
@endsection

<style>
    .con1{
        margin-top: 10%;
        padding: 30px;
    }
    .booking{
        float: right;
    }
    .modal_container{
        border: 1px solid lightgray;
        padding: 10px;
    }
    .advisor{
        margin-top: 10px;
    }
    .advisor_div{
        padding: 2px;
        background-color: white;
        /* background: linear-gradient(to top right, #808080 15%, #d3d3d3 100%); */
        border-radius: 10px;
        box-shadow: 0 30px 60px 0 rgb(0 0 0 / 14%);

    }
    .select{
        display: none;
    }
    .show{
        display: block !important;
    }
    .btn-secondary{
        background-color:#2179BB !important;
    }
    @media only screen and (max-width: 769px) {
        .con1 {
            margin-top: 15% !important;

        }
    }
        @media only screen and (max-width: 426px) {
            .con1 {
                margin-top: 24% !important;

            }

}
@media only screen and (max-width: 321px) {
                .con1 {
                    margin-top: 31% !important;

                }
            }
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
@section('content')
<div class="container con1">


<?php
$id = Auth::user()->id;
try {

    $pdo =   pdo();
    $sql = 'SELECT * FROM  users JOIN  appointments ON users.id=appointments.stuID Where AdvisorID ='. $id.'';
    // SELECT users.name FROM users JOIN appointments ON users.id=appointments.stuID

    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

?>
    <!-- Button trigger modal -->
    <div class="row">

        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

        <div class="col-lg-12" style="padding: 20px">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Booking Start Time</th>
                        <th scope="col">Booking End Time</th>
                        <th scope="col">Booking Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Availability</th>


                      </tr>
                    </thead>
                    <tbody>

                        <?php while ($row = $q->fetch()): ?>
                      <tr>
                        <th scope="row">1</th>
                        <td><?php echo htmlspecialchars($row['name']) ?></td>
                        <td><?php echo htmlspecialchars($row['appt_start_time']) ?></td>
                        <td><?php echo htmlspecialchars($row['appt_end_time']) ?></td>
                    <td><?php echo htmlspecialchars($row['appt_date']) ?></td>
                    <td><?php echo htmlspecialchars($row['status']) ?></td>
                        {{-- <td><button class="btn btn-danger"  onclick="return confirm('Ar
                            e you sure you want to Cancle your Booking?');" >Cancle</button></td> --}}
                        <td><div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Availability
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              {{-- <li><a class="dropdown-item" href="{{url('/Available',htmlspecialchars($row['id']))}}">Available</a></li> --}}
                              <li>
                                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#approved">
                                    Available
                                  </button> --}}

                                  <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#approved"> Available</a>
                              </li>
                              <li><a class="dropdown-item" href="{{url('/Not/Available',htmlspecialchars($row['id']))}}">Not Available</a></li>
                            </ul>
                          </div></td>

                      </tr>


                      <div class="modal fade" id="approved" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                              <form action="{{url('/Available')}}" enctype="multipart/form-data">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <label for="">Message</label>
                              <input type="text" style="margin-top: 5px" name="message" class="form-control" placeholder="Enter Message" id="">
                              <input type="hidden" value="{{htmlspecialchars($row['id'])}}" name="id" id="">
                              <input type="hidden" value="{{htmlspecialchars($row['AdvisorID'])}}" name="AdvisorID" id="">
                              <input type="hidden" value="{{htmlspecialchars($row['stuID'])}}" name="stuID" id="">


                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                          </div>

                        </div>
                      </div>


                      <?php endwhile; ?>
                    </tbody>
                  </table>
              </div>
        </div>
    </div>




{{-- <button class="btn btn-primary booking">Start Booking</button> --}}
</div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#click").click(function(){
    $(".select").toggleClass("show");
  });
});

</script>

<script>
    $(document).ready(function () {


        $('.nav-item').removeClass("active1");
    $('#Advisor').addClass("active1");


    });
</script>
@endsection
