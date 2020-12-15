@extends('home')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password], input[type=email] {
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  margin-left: 10%;
  margin-right: 10%;
}

span.psw {
  float: right;
  padding-top: 16px;
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
</style>
</head>
<body>
@section('content')

<h2><center>Registration Form<center></h2>
<div>
    <ul>
        @foreach($errors->all() as $e)
            <li>{{$e}}</li>
        @endforeach
    </ul>
</div>
<form action="/registered" method="post">
@csrf
  <!-- <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div> -->
  <div class="container">

    <label for="name"><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="name" required><br>
    @error('name')
        <div>{{$message}}</div>
    @enderror
    <br>
    <label for="mobile"><b>Contact No. </b></label><br>
    <input type="text" placeholder="Enter Contact No." name="mobile" required><br>
    @error('mobile')
        <div>{{$message}}</div>
    @enderror
    <br>
    <label for="email"><b>EmailID </b></label><br>
    <input type="email" placeholder="Enter EmailID" name="email" required><br>
    @error('email')
        <div>{{$message}}</div>
    @enderror
    <br>
    <label for="password"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required><br>
    @error('password')
        <div>{{$message}}</div>
    @enderror
    <br>
    <label for="address"><b>Address</b></label><br>
    <input type="text" placeholder="Enter Address" name="address" required><br>
    @error('address')
        <div>{{$message}}</div>
    @enderror
    <br>
    <label for="aadhar"><b>Aadhar Card </b></label><br>
    <input type="text" placeholder="Enter Aadhar Card" name="aadhar" required><br>
    @error('aadhar')
        <div>{{$message}}</div>
    @enderror
    <br>
    <button type="submit">Register</button>
    
  </div>

</form>
@endsection
</body>
</html>