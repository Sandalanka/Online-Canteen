@extends('layout.main')

@section('tittle')
Add Food
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
<center>
<form method="post" action="{{route('newfood')}}">
{{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Food Name</label>
    <input type="text" name="name" class="form-control"  placeholder="Food Name">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Prices</label>
    <input type="number" name="price" class="form-control"placeholder="price">
  </div>


 
  <button type="submit" class="btn btn-primary">Add</button>
</form>
</center>

@endsection