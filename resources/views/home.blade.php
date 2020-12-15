@extends('layout')
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
            body {font-family: Arial, Helvetica, sans-serif;}
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
            
            </style>
    </head>
<body>
<br>
<br>
<br>
<?php 
    if(!empty(Session::get('data'))){
        print_r("uuuu" . Session::get('data'));
    }
    ?>

        <div class="header">
            @section('header')
            <!-- <h1>Header</h1> -->
            
            <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand" href="#">Hostel Management System</a>
                </div>
                <ul class="nav navbar-nav">
                <li id="i1" class="active"><a href="registration">Registration</a></li>
                <!-- <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li> -->
                <li><button float="right" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="btn btn-danger navbar-btn">Login</button></li>
                
                </ul>
            </div>
            </nav>
            <div id="id01" class="modal">
            
            <form class="modal-content animate" action="/formdata" method="post">
            @csrf
                <!-- <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="img_avatar2.png" alt="Avatar" class="avatar">
                </div> -->
                <div>
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{$e}}</li>
                    @endforeach
                </ul>
                </div>
                <div class="container">
                <label for="email"><b>EmailID</b></label><br>
                <input type="email" placeholder="Enter EmailID" name="email" required><br>
                @error('email')
                    <div>{{$message}}</div>
                @enderror<br>
                <label for="psw"><b>Password</b></label><br>
                <input type="password" placeholder="Enter Password" name="password" required><br>
                @error('password')
                    <div>{{$message}}</div>
                @enderror<br>
                <button type="submit">Login</button><br>
                <!-- <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label> -->
                </div>

                <div class="containerr" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <!-- <br>
                <span class="psw">Forgot <a href="#">password?</a></span> -->
                </div>
            </form>
            </div>

            <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            </script>
            @show
        </div>

</body>
</html>
