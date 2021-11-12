@extends('layouts.mainlayout')

@section('title')
<title>Profile</title>
@endsection
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
<div class="container con1">
    <div class="row" style="padding:35px;">
        <div class="col-lg-12 col-12" style="text-align: center;">
            <img src="{{asset('images/avatar.png')}}" class=" img">
        </div>
        <div class="col-lg-6 col-sm-6 col-12" style="padding:20px">
            <label >Name:</label>
            <input type="text" class="form-control" placeholder="Name">
        </div>
        <div class="col-lg-6 col-sm-6 col-12" style="padding:20px">
            <label>Email:</label>

            <input type="text" class="form-control" placeholder="Mobile Number">
        </div>
        <div class="col-lg-6 col-sm-6 col-12" style="padding:20px">
            <label>Phone Number:</label>

            <input type="text" class="form-control" placeholder="Phone Number">
        </div>
        <div class="col-lg-6 col-sm-6 col-12" style="padding:20px">
            <label>Password:</label>

            <input type="password" class="form-control" placeholder="Password">
        </div>
        <div class="col-lg-6 col-sm-6 col-12" style="padding:20px">
            <label>Confirm Password:</label>

            <input type="password" class="form-control" placeholder="Confirm Password">
        </div>
        <div class="col-lg-12 col-12" style="text-align: center;">
            <h3>Availability</h3>


        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding:20px">
            <b>Monday</b><br>
            <label>Start Time:</label>

            <input type="time" class="form-control" name="start-time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding:20px">
            <br>
            <label>End Time:</label>

            <input type="time" class="form-control" name="end-time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding:20px">
            <b>Tuesday</b><br>
            <label>Start Time:</label>

            <input type="time" class="form-control" name="start-time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding:20px">
            <br>
            <label>End Time:</label>

            <input type="time" class="form-control" name="end-time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding:20px">
            <b>Wednesday</b><br>
            <label>Start Time:</label>

            <input type="time" class="form-control" name="start-time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding:20px">
            <br>
            <label>End Time:</label>

            <input type="time" class="form-control" name="end-time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding:20px">
            <b>Thursday</b><br>
            <label>Start Time:</label>

            <input type="time" class="form-control" name="start-time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding:20px">
            <br>
            <label>End Time:</label>

            <input type="time" class="form-control" name="end-time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding:20px">
            <b>Friday</b><br>
            <label>Start Time:</label>

            <input type="time" class="form-control" name="start-time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding:20px">
            <br>
            <label>End Time:</label>

            <input type="time" class="form-control" name="end-time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding:20px">
            <b>Saturday</b><br>
            <label>Start Time:</label>

            <input type="time" class="form-control" name="start-time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding:20px">
            <br>
            <label>End Time:</label>

            <input type="time" class="form-control" name="end-time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding:20px">
            <b>Sunday</b><br>
            <label>Start Time:</label>

            <input type="time" class="form-control" name="start-time">
        </div>
        <div class="col-lg-3 col-sm-6 col-12" style="padding:20px">
            <br>
            <label>End Time:</label>

            <input type="time" class="form-control" name="end-time">
        </div>
    </div>
</div>
@endsection
