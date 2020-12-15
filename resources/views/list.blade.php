@extends('layout')
@section('content')
<br>
<br>
<br>
<div>
    <ul>
        @foreach($user as $u)
        <li><span>{{$u->UName}}</span> <span>{{$u->UEmailID}}</span></li>
        @endforeach
    </ul>
</div> 
@endsection