@extends('layout2')
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
  width: 20%
}

.button3:hover {
  background-color: #f44336;
  color: white;
}
input[type=date], select, option {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
</style>
</head>
<body>
<br>
<br>
<br>
@section('content')
<table id="customers">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>EmailID</th>
    <th>Contact No.</th>
    <th>Address</th>
    <th>Register Date</th>
    <th>Adhar Card</th>
    <th>Room No.</th>
    <!-- <th>IsAllocated</th> -->
    <th>Joining Date</th>
    <th>Leaving Date</th>
  </tr>
  @foreach($data as $item)
  <tr>
    <td>{{ $item->UID }}</td>
    <td>{{ $item->UName }}</td>
    <td>{{ $item->UEmailID }}</td>
    <td>{{ $item->MobileNo }}</td>
    <td>{{ $item->Address }}</td>
    <td>{{ $item->RegiterDate }}</td>
    <td>{{ $item->AdharCard }}</td>
    <td>{{ $item->RoomNo }}</td>
    <!-- <td>{{ $item->IsAllocated }}</td> -->
    <td>{{ $item->JoiningDate }}</td>
    <td>{{ $item->LeavingDate }}</td>
  </tr>
  @endforeach
  </table>
  <br>
  <center>
  <form action="/delete" method="post">
    @csrf
  <div class="container">
    <div class="dropdown">
      <select name="email" class="email">
        <option value="" disabled selected>EmailID</option>
          @foreach($data as $item)
            <option value="{{ $item->UEmailID }}">{{ $item->UEmailID }}</option>
          @endforeach
      </select>
    </div>
    <br>
    
        <button class="button button3" type="submit">Delete anyone?</button>
    </center>
    
  </div>

</form>
</body>
</html>