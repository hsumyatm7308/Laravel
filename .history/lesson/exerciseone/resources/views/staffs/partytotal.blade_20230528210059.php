<!DOCTYPE html>
<html>
  <head>
      <title>Staff Page </title>
      <p>This is Staff Partytotal is {{$total}}</p>
</head>   
<body>
    <h1>Welcome to Our site </h1>

    <li><a href="{{URL::to('staffs')}}">Home</a></li>
    <li><a href="{{route('staffs.party')}}">Party </a></li>
    <li><a href="">Edit </a></li>
</body> 
</html>