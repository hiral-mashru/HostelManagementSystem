@extends('layout')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=date], select, option {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
#bt1 {
  width:40%;
}
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
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
.room {
    width: 100%
  }

</style>
</head>
<body>
@section('content')
<br>
<br>
<br>
<h2><center>Profile {{Session::get('data')}} <center></h2>
<?php  ?>
<div>
    <ul>
        @foreach($errors->all() as $e)
            <li>{{$e}}</li>
        @endforeach
    </ul>
</div>
<form action="/profille" method="post">
@csrf
  <div class="container"><center>
    <div class="dropdown">
      <select name="room" class="room">
        <option value="" disabled selected>Room No</option>
          @foreach($data as $item)
            <option value="{{ $item }}">{{ $item }}</option>
          @endforeach
      </select>
    </div>
    <br><br>
    <label for="joiningdate"><b>Joining Date </b></label><br>
    <input type="date" name="joiningdate" required><br>
    <br>
    <button type="submit" id="bt1">Register</button>
    </center>
  </div>

</form>
@endsection
</body>
</html>