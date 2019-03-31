@extends('layout.main')
@section('tittle')
Student Login
@endsection

@section('body')
<nav class="navbar navbar-expand-lg navbar-light bg-light">

 
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./student">Student Registation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./slogin">Student Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./alogin">Admin Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./feedback">Feedbacks</a>
      </li>
    </ul>
  
  </div>
</nav>

<form method="post" action="{{route('slogin')}}">
  <center><h1>Student Login</h1></center>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email">
  {{csrf_field()}}
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control"  placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
</form>
<div class="card bg-dark text-white">
  <img class="card-img" src="img/113.png" alt="Card image">
  <div class="card-img-overlay">
    <h5 class="card-title">University of Sabaragamuwa Main Canteen</h5>
    <p class="card-text">Contact Number:0115 777 333<br>Email Address:Maincnteen@gmail.com</p>
   
  </div>
@endsection