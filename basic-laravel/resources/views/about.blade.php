<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>about</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quis possimus dolores repudiandae voluptate fugiat sint neque culpa, dolore, eaque sed quasi ex, tempore ullam esse quidem ipsum necessitatibus laudantium.</p>
    
    <p>{{$address}}</p>
    <p>{{$tel}}</p>
    <p>{{$email}}</p>
    <p>{{$error}}</p>
    <a href="{{url('/')}}">Home</a>
    <a href="{{route('admin')}}">Admin</a>
    <a href="{{route('member')}}">Member</a>
    <a href="{{route('about')}}">About</a>
</body>
</html>