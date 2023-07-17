<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
    a {
        text-decoration: none;
        color: black;
    }
    .show{
      display:inline;
    }
    .navbarr{
      float:right;
      margin: 0px 50px;
      position:relative;
      display:flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 20px;
      height: 20px;
      cursor:pointer;
    }
    .line{
      width:100%;
      height:3px;
      background-color: black;
      margin-top: 4px;
    }
    .navv-bar{
      float:right;
      margin: 0px 50px;
      position:relative;
      display:flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    a.hov:hover{
      background-color:black;
      color:white;
    }
    .padd,header{
      width:95%;
      padding:15px;
      margin:15px;
      background: linear-gradient(-135deg, #c850c0, #4158d0);
      box-shadow: 5px black blur;
      border: 0.5px solid white;
      border-radius: 6px;
    }
    h3{
      font-weight: bold;
      padding:5px;
      color:white;
    }
    p{
      color:white;
    }
    button{
            background-color:black;
            color:white;
            height: 30px;
            width: 160px;
            border:0.5px solid black;
            border-radius: 20px;
        }
        a{
          color:white;
        }
        button:hover{
          transform:scale(1.3);
        }
        img{
          align-items:center;
          margin: 5px 360px;
          border:2px solid black;
          border-radius: 5px;
          padding:10px;
        }
    </style>
</head>
<body>
@section('content')
<div>section</div>
@endsection
@include('layouts.footer')
</body>
</html>