<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            height: 615px;
            width:96%;
            background: linear-gradient(-135deg, #c850c0, #4158d0);
        }
        table{
            width: 500px;
            height: 250px;
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 2px blur grey;
            padding: 20px;
        }
        thead{
            height: 50px;
            background-color: black;
            color: white; 
            text-align: center; 
        }
        tbody{
            background-color: white;
            text-align: center;
        }
        h3{
            padding: 10px 30px;
            height:30px;
            font-weight: bold;
            background-color: white;
            justify-content: center;
            border-radius: 20px;
        }
        button{
            background-color:black;
            color:white;
            height: 30px;
            width: 80px;
            border:0.5px solid black;
            border-radius: 20px;
        }
        button:hover{
            transform: scale(1.3);
        }
        .a {
            text-decoration: none;
            color:white;
        }
        div{
            height:40px;
        }
    </style>
</head>
<body>
        <br>
<h3>Read the -> <button style="float:right;"><a class="a" href="{{url('loginpage')}}">Login</a></button>
</h3>
<br><br>
<center>
<table class='table' id="myTable">
    <thead>
    <tr>
        <td>Blog of..</td>
        <td>Blog Image</td>
        <td>Blog Data</td>
    </tr>
    </thead>
    @foreach($user as $userd)
    <tbody>
    <tr>
        <td>{{$userd->name}}</td>
        <td height='200' width='150'><img src="{{asset($userd->image_url)}}"></td>
        <td>{{$userd->blog}}</td>
    </tr>
    </tbody>
    @endforeach
</table>
@show
<div>
    {{$user->links()}}
</div>
<br><br><br>
    </center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            alert('redirecting to login page');
        });
    });
</script>
</body>
</html>