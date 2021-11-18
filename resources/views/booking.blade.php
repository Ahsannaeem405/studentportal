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

    $sql = 'SELECT * FROM  users JOIN  appointments ON users.id=appointments.AdvisorID Where stuID ='. $id.'';
    // SELECT users.name FROM users JOIN appointments ON users.id=appointments.stuID

    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

?>
    <!-- Button trigger modal -->
    <div class="row">
        <div class="col-lg-12 col-12">
            {{-- <button type="button" class="btn btn-primary booking" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Start Booking
              </button> --}}

              <!-- Modal -->

        </div>
        <div class="col-lg-12" style="padding: 20px">

        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
            <div class="table-responsive">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Advisor Name</th>
                        <th scope="col">Booking Start Time</th>
                        <th scope="col">Booking End Time</th>
                        <th scope="col">Booking Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>


                      </tr>
                    </thead>
                    <tbody>
                      {{-- <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>11:40 PM</td>
                        <td>11-02-2021</td>
                        <td>Pending</td>

                      </tr> --}}


                      <?php while ($row = $q->fetch()): ?>
                      <tr>
                        <th scope="row">1</th>
                        <td><?php echo htmlspecialchars($row['name']) ?></td>
                        <td><?php echo htmlspecialchars($row['appt_start_time']) ?></td>
                        <td><?php echo htmlspecialchars($row['appt_end_time']) ?></td>
                    <td><?php echo htmlspecialchars($row['appt_date']) ?></td>
                    <td><?php echo htmlspecialchars($row['status']) ?></td>
                          <td><a href=" {{url('cancel',htmlspecialchars($row['id']))}}" class="btn btn-danger"  onclick="return confirm('Are you sure you want to Cancle your Booking?');" >Cancel</a></td>

                      </tr>

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
@endsection
