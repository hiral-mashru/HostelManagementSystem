<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/','home');
Route::post('/formdata',"Registration@login");
Route::view("/registration",'registration');
Route::post('/registered',"Registration@register");
Route::get('/formdata/list',"Registration@list");
Route::get('/formdata/profile',"Registration@showprofile");
Route::get('/formdata/admin',"Registration@showAdmin");
Route::get('/profile',function(){
    if(!session()->has('data')){
        return redirect('/');
    } else {
        return redirect("/formdata/profile");
    }
});
Route::get('/admin',function(){
    if(!session()->has('data')){
        return redirect('/');
    } else {
        return redirect("/formdata/admin");
    }
});
Route::get('/formdata/logout',function(){
    session()->forget('data');
    return redirect('/');
});
Route::get('/formdata/showData',"Registration@showData");
Route::post('/delete',"Registration@delete");
Route::post('/profille',"Registration@profile");
Route::post('/adminn',"Registration@admin");
Route::get('setcookie','cookiecontroller@setcookie');
Route::get('getcookie','cookiecontroller@getcookie');