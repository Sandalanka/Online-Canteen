@extends('layout.main')
@section('tittle')
Admin Add
@endsection

@section('body')

<nav class="navbar navbar-expand-lg navbar-light bg-light">

 
<div class="collapse navbar-collapse" id="navbarText">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="./order">Order <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./food">Food</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./adminadd">Admin Add</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./studentshow">Student</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./feedbackshow">Feedbacks</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./logout">Logout</a>
    </li>
  </ul>

</div>
</nav>
<div class="col-md-6">
<h1>Admin Registation</h1>
<form method="post" action="{{route('adminregistation')}}">
{{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" name="name" class="form-control"  placeholder="Full Name">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">ID Number</label>
    <input type="number" name="id" class="form-control"placeholder="ID Number">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Contact Number</label>
    <input type="number" name="contact"class="form-control"placeholder="Tele Phone">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email Address</label>
    <input type="email" name="email" class="form-control"placeholder="Email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control"placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection