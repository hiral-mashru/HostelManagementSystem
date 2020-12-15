<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
class LogCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // print_r(\Session::get('logData'));
        // if(empty(\Session::get('logData'))){
        //     return redirect('/registration');
        // }
        echo "path: ".$request->path();
        echo"<br>session: ";
        print_r(\Session::get('logData'));
        $path=$request->path();
        if(($path=="" || $path=="registration") && (Session::get('UName'))){
            return redirect('/registration');
        }
       
        return $next($request);
    }
}
