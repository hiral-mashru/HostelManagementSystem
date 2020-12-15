<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class cookiecontroller extends Controller
{
    public function setcookie(){
        //how long cookie should remain in minutes
        $minutes=15;
        //response msg of cookie
        $response = new Response('Hello students');
        //set cookie and its value
        $response->withCookie(cookie('name','heer',$minutes));
        $response->withCookie(cookie('address','hbjnkml',$minutes));

        //set cookie
        return $response;
    }

    public function getcookie(Request $req){
        $result = $req->cookie('name');
        $result1=$req->cookie('address');

        echo $result;
        echo $result1;
    }
}
