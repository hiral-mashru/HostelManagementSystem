<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <script src="{{asset('js/app.js')}}"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                /* background-color: lightpink; */
            }
            
            /* Full-width input fields */
            input[type=email], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            width: 80%;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            }

            /* Set a style for all buttons */
            button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 80%;
            }

            button:hover {
            opacity: 0.8;
            }

            /* Extra styles for the cancel button */
            .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
            }

            /* Center the image and position the close button */
            .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
            }

            img.avatar {
            width: 40%;
            border-radius: 50%;
            }

            .container {
            padding: 16px;
            }

            span.psw {
            float: right;
            padding-top: 16px;
            }

            /* The Modal (background) */
            .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
            }

            /* Modal Content/Box */
            .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
            }

            /* The Close Button (x) */
            .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
            }

            .close:hover,
            .close:focus {
            color: red;
            cursor: pointer;
            }

            /* Add Zoom Animation */
            .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
            }

            @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)} 
            to {-webkit-transform: scale(1)}
            }
            
            @keyframes animatezoom {
            from {transform: scale(0)} 
            to {transform: scale(1)}
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
            }
            .containerr{
                width: 80%;
            }
            #img {
                height: 700px;
                width: 1300px;
            }
            </style>
    </head>
    <body>
        <div class="header">
            @section('header')
            <!-- <h1>Header</h1> -->
            <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand" href="">Hostel Management System</a>
                </div>
                <ul class="nav navbar-nav">
                <li id="i1" class="active"><a href="/formdata/profile">Profile</a></li>
                <!-- <li><a href="/formdata/list">Show Check In List</a></li> -->
                <!-- <li><a href="">Check In</a></li> -->
                <!-- <li><a href="#">Page 3</a></li> -->
                <li><a href="/formdata/logout" style="width:auto;">Logout</a></li>
                </ul>
            </div>
            </nav>
            @show
        </div>
        <div class="content">
            @section('content')
            <img src="{{asset('cheap-inn-affordable-guesthouse-college-dormitory-motel-check-hostel-services-lower-priced-accommodation-best-hostel-facilities-concept_335657-694.jpg')}}" id="img">
            @show
        </div>
        <div class="footer">
            @section('footer')
            <!-- <h1>footer</h1> -->
        </div>
        @show
    </body>
</html>