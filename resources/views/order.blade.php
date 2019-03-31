@extends('layout.main')

@section('tittle')
Order
@endsection

@section('body')

  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="collapse navbar-collapse" id="navbarText">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="./back">Back <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="./logout">Logout <span class="sr-only">(current)</span></a>
    </li>
</nav>

<center>
<form method="post" action="{{route('neworder')}}">
{{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Student Name</label>
    <input type="text" name="name" class="form-control"  placeholder="Student Name">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Student ID</label>
    <input type="text" name="sid" class="form-control"placeholder="Student ID">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Food Iteam</label>
    <input type="text" name="food" class="form-control"  placeholder="Food Iteam">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Amount</label>
    <input type="number" name="amount" class="form-control"placeholder="Amount">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date</label>
    <input type="date" name="date" class="form-control"  placeholder="Date">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contact Number</label>
    <input type="number" name="contact" class="form-control"placeholder="Contact">
  </div>


 
  <button type="submit" class="btn btn-primary">Order</button>
</form>
</center>
@endsection