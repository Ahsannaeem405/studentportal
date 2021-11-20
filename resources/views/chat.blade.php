@extends('layouts.mainlayout')

@section('title')

    <style>
        .chat-body {
            width: 50% !important;


        }

        .cart-body2 {
            float: right !important;
            margin-right: 20px !important;
        }

        .loader {
            position: absolute;
            left: 40%;
            z-index: 2000;
            top: 30%;

            border: 8px solid #18a39c;
            border-radius: 50%;
            border-top: 8px solid #18a39c;
            border-right: 8px solid #beeae8;
            border-bottom: 8px solid #beeae8;
            width: 80px;
            height: 80px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
@endsection
@section('content')



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 0;

            color: #777;
            background: #f9f9f9;
            font-family: 'Open Sans', sans-serif;

        }

        .bg-white {
            background-color: #fff;
        }

        .friend-list {
            list-style: none;

            padding: 10px;
        }

        .friend-list li {
            border-bottom: 1px solid #eee;
        }

        .friend-list li a img {
            float: left;
            width: 45px;
            height: 45px;
            margin-right: 10px;
        }

        .friend-list li a {
            position: relative;
            display: block;
            padding: 10px;
            transition: all .2s ease;
            -webkit-transition: all .2s ease;
            -moz-transition: all .2s ease;
            -ms-transition: all .2s ease;
            -o-transition: all .2s ease;
        }

        .friend-list li.active a {
            background-color: #f1f5fc;
        }

        .friend-list li a .friend-name,
        .friend-list li a .friend-name:hover {
            color: #777;
        }

        .friend-list li a .last-message {
            width: 65%;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }

        .friend-list li a .time {
            position: absolute;
            top: 10px;
            right: 8px;
        }

        small, .small {
            font-size: 85%;
        }

        .friend-list li a .chat-alert {
            position: absolute;
            right: 8px;
            top: 27px;
            font-size: 10px;
            padding: 3px 5px;
        }

        .chat-message {

        }

        .chat {
            list-style: none;
            margin: 0;
        }

        .chat-message {
            background: #f9f9f9;
        }

        .chat li img {
            width: 45px;
            height: 45px;
           max-width: 45px;
           max-height: 45px;
            border-radius: 50em;
            -moz-border-radius: 50em;
            -webkit-border-radius: 50em;
        }

        img {
            max-width: 100%;
        }

        .chat-body {
            padding-bottom: 20px;
        }

        .chat li.left .chat-body {
            margin-left: 70px;
            background-color: #fff;
        }

        .chat li .chat-body {
            position: relative;
            font-size: 11px;
            padding: 10px;
            border: 1px solid #f1f5fc;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .chat li .chat-body .header {
            padding-bottom: 5px;
            border-bottom: 1px solid #f1f5fc;
        }

        .chat li .chat-body p {
            margin: 0;
        }

        .chat li.left .chat-body:before {
            position: absolute;
            top: 10px;
            left: -8px;
            display: inline-block;
            background: #fff;
            width: 16px;
            height: 16px;
            border-top: 1px solid #f1f5fc;
            border-left: 1px solid #f1f5fc;
            content: '';
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
        }

        .chat li.right .chat-body:before {
            position: absolute;
            top: 10px;
            right: -8px;
            display: inline-block;
            background: #fff;
            width: 16px;
            height: 16px;
            border-top: 1px solid #f1f5fc;
            border-right: 1px solid #f1f5fc;
            content: '';
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -o-transform: rotate(45deg);
        }

        .chat li {
            margin: 15px 0;
        }

        .chat li.right .chat-body {
            margin-right: 70px;
            /* background-color: #fff; */
        }

        .chat-box {
            /*
              position: fixed;
              bottom: 0;
              left: 444px;
              right: 0;
            */
            padding: 15px;
            border-top: 1px solid #eee;
            transition: all .5s ease;
            -webkit-transition: all .5s ease;
            -moz-transition: all .5s ease;
            -ms-transition: all .5s ease;
            -o-transition: all .5s ease;
        }

        .primary-font {
            color: #3c8dbc;
        }

        a:hover, a:active, a:focus {
            text-decoration: none;
            outline: 0;
        }

        .chatimage {
            width: 50px;
            border-radius: 50%;
        }

        .name {
            background-color: whitesmoke;
            padding: 10px;
        }

        .no-rounded {
            padding: 19px 44px;
        }

        /* sidebar css */
        .sidebar {
            height: 100%;
            width: 0;
            position: absolute;

            top: 0;
            left: 0;
            background-color: white;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 100px;
            z-index: 999;
        }

        .sidebar .friend-list li .img-circle {
            font-size: 13px !important;
        }

        .sidebar .friend-list {
            margin-top: 40px;
        }

        .sidebar .friend-list li .friend-name {
            font-size: 13px !important;
        }

        .sidebar .friend-list li .last-message {
            font-size: 13px !important;
        }

        .sidebar .friend-list li .time {
            font-size: 13px !important;
        }

        .sidebar .friend-list {
            margin-left: 0px;
        }


        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .sidebar .closebtn {
            z-index: 120;
            color: black;
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        .openbtn {
            font-size: 20px;
            cursor: pointer;
            /* background-color: #111; */
            color: black;
            padding: 10px 15px;
            border: none;
        }

        .openbtn:hover {
            background-color: #444;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        .default-chat {
            background-image: url('userSide/assets/img/gallery/chat.jpg');
        }

        @media only screen and(max-width: 750px ) {

        }

        @media only screen and (min-width: 768px) {
            .sidebar {
                display: none;
            }

            .bids_div {
                display: block;
            }

            .openbtn {
                display: none;
            }

            .friend {
                display: block;


            }


        }

        @media only screen and (max-width: 768px) {
            .chat-box {
                bottom: -70px !important;

            }

            .sidebar {
                display: block;
            }

            .bids_div {
                display: none;
            }

            .openbtn {
                display: block;
            }

            .friend {
                display: none;
            }

            .input-group {

                padding-left: 5px;
            }

            #user_profile_mobile{
                display: block !important;
            }
            #text_msg{
                /*width: 100% !important;*/
                font-size: 12px !important;
            }
            .chat-box{
                width: 100% !important;
                margin-left: -5%;
            }


       #send {
            border-radius: 10px !important;
            padding: 13px !important;
            vertical-align: sub !important;
            margin-top: 7px !important;
        }

        }

        @media screen and (max-height: 450px) {
            .sidebar {
                padding-top: 15px;
            }

            .sidebar a {
                font-size: 18px;
            }
        }

        .chat-message::-webkit-scrollbar {
            width: 12px; /* width of the entire scrollbar */
        }

        .chat-message::-webkit-scrollbar-track {
            background: #ebf8f6;

        }

        .chat-message::-webkit-scrollbar-thumb {
            background-color: #3ae3c4;
            border-radius: 20px; /* roundness of the scroll thumb */
            border: 3px solid #d6efeb;

        }


        .bid-message::-webkit-scrollbar {
            width: 12px; /* width of the entire scrollbar */
        }

        .bid-message::-webkit-scrollbar-track {
            background: #ebf8f6;

        }

        .bid-message::-webkit-scrollbar-thumb {
            background-color: #3ae3c4;
            border-radius: 20px; /* roundness of the scroll thumb */
            border: 3px solid #d6efeb;

        }

        /*.chat-message::-webkit-scrollbar-thumb {*/
        /*    background-color: blue;    !* color of the scroll thumb *!*/
        /*    border-radius: 20px;       !* roundness of the scroll thumb *!*/
        /*    border: 3px solid orange;  !* creates padding around scroll thumb *!*/
        /*}*/

        /* sidebar css end */

    </style>


    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <ul class="friend-list table-responsive mobile-view" style="min-height: 500px">
{{--            <li>--}}
{{--                <div class="input-group mb-3">--}}
{{--                    <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username"--}}
{{--                           aria-describedby="basic-addon2">--}}
{{--                    <div class="input-group-append">--}}
{{--                       <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </li>--}}

{{-- @dd($contacts) --}}




            @foreach ($contact as $contact9)
           {{-- <?php while ($contact9 = $contact->fetch()): ?> --}}


                @if($contact9->sender ==Auth::user()->id)
                    @php
                        $id= $contact9->receiver;

                        // $id=  $contact->receiver;

                    @endphp
                @else

                    @php
                      $id= $contact9->sender;
                        // $id=$contact->sender;

                    @endphp
                @endif
                @php
                    $user=App\Models\User::find($id);
                @endphp
                <li class="" userid="   {{$user->id}}" username="{{$user->name}}">
                    <a href="{{url("chat?id=$user->id")}}" class="clearfix">
                        <img src="" alt=""
                             class="img-circle">
                        <div class="friend-name">
                            <strong>{{$user->name}}</strong>
                        </div>

                        {{--                        <small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>--}}
                    </a>
                </li>
            @endforeach

            {{-- <?php endwhile; ?> --}}


        </ul>
    </div>


    <div id="main">
        <button class="openbtn" onclick="openNav()">☰</button>

    </div>
    <div class="container bootstrap snippets bootdey" style="margin-top: 71px;">
        <div class="row m-0">

            <div class="col-md-3 bg-white friend " style="border-right: 1px solid #a1a0a0;">

                <!-- =============================================================== -->
                <!-- member list -->
                <ul class="friend-list table-responsive desktop-view" style="height: 500px">

                    <h4 class="mb-2">Contact list</h4>

                {{-- <?php while ($contact = $contact->fetch()): ?> --}}

                    @foreach ($contact as $contact9)

                    @if($contact9->sender ==Auth::user()->id)
                    @php
                        $id= $contact9->receiver;

                        // $id=  $contact->receiver;

                    @endphp
                @else

                    @php
                      $id= $contact9->sender;
                        // $id=$contact->sender;

                    @endphp
                @endif


                        @php
                            $user=App\Models\User::find($id);
                        @endphp
                        <li class="" userid="{{$user->id}}" username="{{$user->name}}">
                            <a href="{{url("chat?id=$user->id")}}" class="clearfix">
                                <img src="{{asset('images/avatar.png')}}" style="border-radius: 50%" alt=""
                                     class="img-circle">
                                <div class="friend-name">
                                    <strong>{{$user->name}}</strong>
                                    @php

                                        $auth= Auth::user()->id;

                                             $msg = DB::select("select * from  messages where ((`sender`=$auth and `receiver`=$user->id) OR (`sender`=$user->id and `receiver`=$auth))  ORDER BY id DESC limit 1");

                                    @endphp

                                    <strong class="d-block">{{$msg[0]->message}}</strong>
                                </div>

                                {{--                                <small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>--}}
                            </a>
                        </li>


                    @endforeach
                          {{-- <?php endwhile; ?> --}}


                </ul>
            </div>

            <!--=========================================================-->
            <!-- selected chat -->
            <div class="col-md-9 bg-white" id="main_chat" style="display: none">
                <div class="loader"></div>
                <div id="receiver_id">


                    @if(isset($_GET['id']))
                        <input type="hidden" value="{{$_GET['id']}}" id="user_id">

                        @php $us=\App\Models\User::find($_GET['id']); @endphp
                        <input type="hidden" value="{{$us->name}}" id="user_name_data">

                    @else
                        <input type="hidden" value="0" id="user_id">
                        <input type="hidden" value="name" id="user_name_data">


                    @endif


                </div>
                <div id="user_name" style="height: 50px;font-size: 20px;font-weight: 700;margin-left: 34px;padding: 8px;background-color: white;"></div>
                <div id="user_profile_mobile" style="display:none;position: absolute;right: 26px;margin-top: -35px;cursor: pointer">



                    <div class="dropdown">
                        <i class="fa fa-ellipsis-v" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="left: -120px !important;">

                            @if(isset($_GET['id']))

                            @php    $url=$_GET['id']; @endphp

                            @else
                           @php     $url=0; @endphp

                            @endif
                            <a class="dropdown-item" href="{{url('view/detail/'.$url.'')}}">View Profile</a>

                        </div>
                    </div>

                </div>
                <div class="chat-message table-responsive" id="chat" style="height:350px ">


                </div>
                <form method="post">
                    @csrf
                    <div class="chat-box bg-white" style="position:relative;width: 100%;bottom: 10px;">
                        <div class="input-group">
                            <input class="form-control border no-shadow no-rounded" placeholder="Type your message here"
                                   id="text_msg">
                            <span class="input-group-btn">
            			<button class="btn btn-success no-rounded" type="button" id="send">Send </button>
            		</span>
                        </div><!-- /input-group -->
                    </div>
                </form>
            </div>


            <div class="col-md-6 bg-white" id="main_chat1">


                <div class="" id="" style="max-height:500px ;text-align: center">

                    <img src="">
                </div>

            </div>


            <div class="col-md-3 bg-white  bids_div" style="border-left:1px solid #a1a0a0 ">


            </div>

        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <script>
        $(document).ready(function () {


            $(document).keypress(
                function(event){
                    if (event.which == '13') {


                        event.preventDefault();
                        $('#send').click();
                    }
                });


            window.setInterval(function () {
                var id = $('#user_id').val();
                if (id >= 1) {


                    var op = " "
                    var auth = {{\Illuminate\Support\Facades\Auth::user()->id}}



                    $.ajax({

                        url: '{{URL::to('getMSG2')}}',
                        type: 'get',
                        dataType: 'JSON',
                        data: {'id': id},
                        success: function (data) {


                            for (var i = 0; i < data.length; i++) {
                                if (data[i].sender == {{Auth::user()->id}}) {
                                    op += '<ul class="chat"><li class="right clearfix"><span class="chat-img pull-right"><img src="{{asset('/images/avatar.png')}}" alt="User Avatar"></span><div class="chat-body cart-body2 clearfix" style="    background-color: azure;"><div class="header"><strong class="primary-font"></strong><small class="pull-right text-muted"><i class="fa fa-clock-o"></i>' + data[i].created_at + '</small></div><p>' + data[i].message + '</p></div></li></ul>';

                                } else {
                                    op += '<ul class="chat"><li class="left clearfix"><span class="chat-img pull-left"><img src="{{asset('/images/avatar.png')}}" alt="User Avatar"></span><div class="chat-body clearfix"><div class="header"><strong class="primary-font"></strong><small class="pull-right text-muted"><i class="fa fa-clock-o"></i>' + data[i].created_at + '</small></div><p>' + data[i].message + '</p></div></li></ul>';

                                }
                            }

                            $('#chat').append(op);

                            if (data.length >= 1) {

                                $('#chat').scrollTop($('#chat')[0].scrollHeight);
                            }


                        }

                    });


                }

            }, 5000);


            var id = $('#user_id').val();
            var name = $('#user_name_data').val();

            if (id >= 1) {
                $('#main_chat1').hide();
                $('#main_chat').show();
                $('.loader').show();

                var op = " ";
                var op1 = " ";



                $.ajax({

                    type: 'get',
                    url: '{{URL::to('showchat')}}',
                    data: {'id': id},

                    success: function (data) {



                        for (var i = 0; i < data.length; i++) {

                            if (data[i].sender == {{Auth::user()->id}}) {
                                op += '<ul class="chat"><li class="right clearfix"><span class="chat-img pull-right"><img src="{{asset('/images/avatar.png')}}" alt="User Avatar"></span><div class="chat-body cart-body2 clearfix" style="    background-color: azure;"><div class="header"><strong class="primary-font"></strong><small class="pull-right text-muted"><i class="fa fa-clock-o"></i>' + data[i].created_at + '</small></div><p>' + data[i].message + '</p></div></li></ul>';

                            } else {
                                op += '<ul class="chat"><li class="left clearfix"><span class="chat-img pull-left"><img src="{{asset('/images/avatar.png')}}" alt="User Avatar"></span><div class="chat-body clearfix"><div class="header"><strong class="primary-font"></strong><small class="pull-right text-muted"><i class="fa fa-clock-o"></i>' + data[i].created_at + '</small></div><p>' + data[i].message + '</p></div></li></ul>';

                            }


                        }


                        $('#user_name').empty();
                        $('#user_name').append(name);


                        $('#chat').empty();
                        $('#chat').append(op);
                        $('.loader').hide();


                        if (data.length >= 1) {

                            $('#chat').scrollTop($('#chat')[0].scrollHeight);
                        }


                    }


                });
            }


            $("#send").click(function () {

                $('.loader').show();

                var op = ' ';
                var msg = $('#text_msg').val();


                var user = $('#user_id').val();

                var _token = $("input[name='_token']").val();
                if (msg != '' && msg != ' ') {

                    $.ajax({
                        url: '{{URL::to('/sendMSG')}}',
                        type: 'POST',
                        dataType: 'JSON',
                        data: {_token: _token, 'message': msg, 'receiver': user},
                        success: function (data) {
                            $('#text_msg').val(" ");


                                op += '<ul class="chat"><li class="right clearfix"><span class="chat-img pull-right"><img src="{{asset('/images/avatar.png')}}" style="max-height:45px;max-width:45px" alt="User Avatar"></span><div class="chat-body cart-body2 clearfix" style="    background-color: azure;"><div class="header"><strong class="primary-font"></strong><small class="pull-right text-muted"><i class="fa fa-clock-o"></i>' + data[0]['created_at'] + '</small></div><p>' + msg + '</p></div></li></ul>';

                            $('#chat').append(op);
                            $('#chat').scrollTop($('#chat')[0].scrollHeight);
                            $('.loader').hide();


                        }


                    });
                }
            });
        });
    </script>
    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
           // document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
  $(document).ready(function () {


      $('.nav-item').removeClass("active1");
  $('#chat123').addClass("active1");


  });
</script>
@endsection
