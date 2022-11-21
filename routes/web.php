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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about/{name}/{lname}', function ($name,$lname) {
    $fullName = $name." ".$lname;
    $collage ="<h1>L.J.collage </h1>";
    $student =['chagan','magan','chintu'];
    return view('about',compact('fullName','collage','student'));
});