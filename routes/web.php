<?php

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

Route::get('/', function () {
    return view('home');
});

//Rount::post('',function (){});
//
//Route::get('/cal/{num1}/{num2}',function ($num1,$num2){
//    return $num1+$num2;
//});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/play/{num1}/{num2}',function ($num1,$num2){

    $sum = $num1+$num2;
    $data = [
      "num1"=>$num1,
      "num2"=>$num2,
        "sum"=>$sum
    ];

    return view('play',$data);
});
