@extends('layout.main')
@section('tittle')

Food 
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
<center><h1 style="  margin-bottom: 20px;
        font-size: 55px;
        color: red;">Food Details<span style="  font-size: 20px;"><a href="./addfood">+Add New Food</a></span></h1></center>


<center>
<table style="    width: 100%;
    border-collapse: collapse">
<tr class="table-success" >
<th style="  background-color: #aaa;
        text-align: left">Food Name</th>
<th style="  background-color: #aaa;
        text-align: left">Price</th>


</tr>
@foreach($table as $value)
<tr>

<td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$value->name}}</td>
<td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$value->price}}</td>

</tr>
@endforeach
</table>
</center>


@endsection