@extends('default')
@include('layouts.header')
@section('content')
<div>
    <input type="hidden" name="id" value="{{$blog->id}}">
    <br>
    <h2>hello <span>{{$blog->name}}</span></h2><hr>
    </div>
<div>
    <div class="navbarr">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
<div class="navv-bar">
    <ul class="dropdown-menu downn">
    <li><a class="dropdown-item hov" href="{{url('editor')}}">Edit the blog</a></li>
    <li><a class="dropdown-item delete hov" href="{{url('delete')}}/{{$blog->id}}">Delete Account</a></li>
    <li><a class="dropdown-item hov" href="{{url('logout')}}">Logout</a></li>
    </ul>
    </div>
</div>
    <br><br>
<h2>Your Blog ->
</h2>
<br>
<img src="{{asset($blog->image_url)}}" height='200' width='200'>
<br>
<div class="padd">
<p >&nbsp;&nbsp;{{$blog->blog}}</p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        alert("Welcome to the blog");
        $(".delete").click(function(){
            alert("Your account will be deleted");
        });
        $(".navbarr").click(function(){
            $("ul").toggleClass("show");
    });
    $("body").dblclick(function(){
        $("ul").removeClass("show");
    })
});
</script>
@show