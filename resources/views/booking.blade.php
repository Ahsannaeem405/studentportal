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
    <!-- Button trigger modal -->
    <div class="row">
        <div class="col-lg-12 col-12">
            <button type="button" class="btn btn-primary booking" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Start Booking
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Booking</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container modal_container">
                            <p id="click">Please click to select Advisor <i class="fas fa-chevron-down" style="float: right"></i></p>
                            <div class="select">
                               <div class="advisor">
                                   <div class="row advisor_div">
                                       <div class="col-lg-2 col-4">
                                           <img src="{{asset('images/avatar.png')}}" alt="" style="width: 50%">
                                       </div>
                                       <div class="col-lg-8 col-8" style="padding-top: 10px;text-align:center;">
                                        <p>Talha</p>
                                       </div>

                                       {{-- <div class="col-lg-2" style="padding-top: 30px">
                                           <button class="btn btn-success">Book</button>
                                       </div> --}}
                                   </div>
                               </div>
                               <div class="advisor">
                                <div class="row advisor_div">
                                    <div class="col-lg-2 col-4">
                                        <img src="{{asset('images/avatar.png')}}" alt="" style="width: 50%">
                                    </div>
                                    <div class="col-lg-8 col-8" style="padding-top: 10px;text-align:center;">
                                     <p>Usman</p>
                                    </div>

                                    {{-- <div class="col-lg-2" style="padding-top: 30px">
                                        <button class="btn btn-success">Book</button>
                                    </div> --}}
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Book</button>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-lg-12" style="padding: 20px">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Advisor Name</th>
                        <th scope="col">Booking Time</th>
                        <th scope="col">Booking Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>


                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>11:40 PM</td>
                        <td>11-02-2021</td>
                        <td>Pending</td>
                        <td><button class="btn btn-danger"  onclick="return confirm('Are you sure you want to Cancle your Booking?');" >Cancle</button></td>

                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Mark</td>
                        <td>11:40 PM</td>
                        <td>11-02-2021</td>
                        <td>Pending</td>
                        <td><button class="btn btn-danger" onclick="return confirm('Are you sure you want to Cancle your Booking?');" >Cancle</button></td>

                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Mark</td>
                        <td>11:40 PM</td>
                        <td>11-02-2021</td>
                        <td>Pending</td>
                        <td><button class="btn btn-danger" onclick="return confirm('Are you sure you want to Cancle your Booking?');" >Cancle</button></td>

                      </tr>
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
