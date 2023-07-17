<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogcontroller;
use App\Http\Middleware\blogmid;

Route::get('/',[blogcontroller::class,'readblog']);

Route::get('sign-up', function(){
    return view('signup');
});

Route::post('signup', [blogcontroller::class,'signup'])->middleware('blogmid');

Route::post('login', [blogcontroller::class,'login']);

Route::get("forgot",function(){
    return view("blog.forgot");
});

Route::post("forgott",[blogcontroller::class,'forgot']);

Route::get('loginpage', function(){
    return view('login');
});

Route::get('logout', function(){
    return view('login');
});

Route::post('edit', [blogcontroller::class,'edit']);

Route::get('editor', [blogcontroller::class,'editor'])->middleware('auth');

Route::get('read', [blogcontroller::class,'readblog']);

Route::get('delete/{id}',[blogcontroller::class,'delete']);

Route::get('deleted', [blogcontroller::class,'deleted']);

Route::get  ('login1',function(){
    return view('editt');
});

