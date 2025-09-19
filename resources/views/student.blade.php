@extends('layout.main')
@section('tittle')
student registation
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
<h1 style="color:red">Student Registation</h1>
<form method="post" action="{{route('register')}}">
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text"name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
  {{csrf_field()}}
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Student ID</label>
    <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter student ID">
  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Faculty</label>
    <input type="text" name="faculty"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Faculty">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contact</label>
    <input type="number" name="contact" class="form-control" id="exampleInputPassword1" placeholder="contact">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email"name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <input type="hidden"name="role" class="form-control" data="student">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<div class="card bg-dark text-white">
  <img class="card-img" src="img/113.png" alt="Card image">
  <div class="card-img-overlay">
    <h5 class="card-title">University of Sabaragamuwa Main Canteen</h5>
    <p class="card-text">Contact Number:0115 777 333<br>Email Address:Maincnteen@gmail.com</p>
   
  </div>
</div>
@endsection