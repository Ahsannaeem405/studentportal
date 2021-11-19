@extends('layouts.mainlayout')

@section('title')
<title>Profile</title>
@endsection

<?php

$adv = App\Models\User::where('id', Auth::user()->id)->first();

?>

<style>
    .con1{
        margin-top: 150px;
        background-color: white;
        /* background: linear-gradient(to top right, #808080 15%, #d3d3d3 100%); */
        border-radius: 10px;
        box-shadow: 0 30px 60px 0 rgb(0 0 0 / 30%);
        margin-bottom: 30px;
    }
    .img{
        /* width: 100%; */
        max-height: 160px !important;
        border-radius: 62% !important;
    background: white;
    }
</style>

@section('content')

<form action=" {{route('availability')}}" method="POST" enctype="multipart/form-data"  >
    @csrf
<div class="container con1">
    <div class="row" style="padding:35px;">
        <div class="col-lg-12 col-12" style="text-align: center;">
            <img src="{{asset('images/avatar.png')}}" class=" img">
        </div>
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
        <div class="col-lg-6 col-sm-6 col-12" style="padding:20px">
            <label >Name:</label>
            <input type="text" name="name" value="{{$adv->name}}" class="form-control" placeholder="Name">
        </div>
        <div class="col-lg-6 col-sm-6 col-12" style="padding:20px">
            <label>Email:</label>

            <input type="text"  name="email"  value="{{$adv->email}}" class="form-control" placeholder="Mobile Number">
        </div>
        <div class="col-lg-6 col-sm-6 col-12" style="padding:20px">
            <label>Phone Number:</label>

            <input type="text"  name="number"  value="{{$adv->number}}" class="form-control" placeholder="Phone Number">
        </div>
        <div class="col-lg-6 col-sm-6 col-12" style="padding:20px">
            <label> Password:</label>

            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="col-lg-6 col-sm-6 col-12" style="padding:20px">
            <label>Confirm Password:</label>

            <input type="password"  name="cpassword" class="form-control" placeholder="Confirm Password">
        </div>


@if(Auth::user()->role == 1)
        <div class="col-lg-12 col-12" style="text-align: center;">
            <h3>Availability</h3>
        </div>



        <div class="container">
            <div class="row">

        <div class="col-lg-3 col-sm-6 col-12" style="padding-bottom:10px">
            <b>Monday</b><br>
            <label>Start Time:</label>

            <input type="time" value="{{$adv->mon_start_time}}" class="form-control" name="mon_start_time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding-bottom:10px">
            <br>
            <label>End Time:</label>

            <input type="time"  value="{{$adv->mon_end_time}}" class="form-control" name="mon_end_time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding-bottom:10px">
            <b>Tuesday</b><br>
            <label>Start Time:</label>

            <input type="time"  value="{{$adv->tue_start_time}}" class="form-control" name="tue_start_time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding-bottom:10px">
            <br>
            <label>End Time:</label>

            <input type="time"  value="{{$adv->tue_end_time}}" class="form-control" name="tue_end_time">
        </div>



        <div class="col-lg-3 col-sm-6 col-12" style="padding-bottom:10px">
            <b>Wednesday</b><br>
            <label>Start Time:</label>

            <input type="time"  value="{{$adv->wed_start_time}}" class="form-control" name="wed_start_time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding-bottom:10px">
            <br>
            <label>End Time:</label>

            <input type="time"  value="{{$adv->wed_end_time}}" class="form-control" name="wed_end_time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding-bottom:10px">
            <b>Thursday</b><br>
            <label>Start Time:</label>

            <input type="time"  value="{{$adv->thu_start_time}}" class="form-control" name="thu_start_time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding-bottom:10px">
            <br>
            <label>End Time:</label>

            <input type="time"  value="{{$adv->thu_end_time}}" class="form-control" name="thu_end_time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding-bottom:10px">
            <b>Friday</b><br>
            <label>Start Time:</label>

            <input type="time"  value="{{$adv->fri_start_time}}" class="form-control" name="fri_start_time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding-bottom:10px">
            <br>
            <label>End Time:</label>

            <input type="time"  value="{{$adv->fri_end_time}}" class="form-control" name="fri_end_time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding-bottom:10px">
            <b>Saturday</b><br>
            <label>Start Time:</label>

            <input type="time"  value="{{$adv->sat_start_time}}" class="form-control" name="sat_start_time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding-bottom:10px">
            <br>
            <label>End Time:</label>

            <input type="time"  value="{{$adv->sat_end_time}}" class="form-control" name="sat_end_time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding-bottom:10px">
            <b>Sunday</b><br>
            <label>Start Time:</label>

            <input type="time"  value="{{$adv->sun_start_time}}" class="form-control" name="sun_start_time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding-bottom:10px">
            <br>
            <label>End Time:</label>

            <input type="time"  value="{{$adv->sun_end_time}}" class="form-control" name="sun_end_time">
        </div>

    </div>


</div>
@endif

<div class="row">
    <div class="col-12" style="margin: auto;text-align: end;">
        <button type="submit" class="btn btn-primary">Submit </button>
    </div>

</div>


</form>
    </div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
  $(document).ready(function () {

      $('.nav-item').removeClass("active1");
  $('#Profie').addClass("active1");


  });
</script>
@endsection
