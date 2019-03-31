@extends('layout.main')
@section('tittle')
Index
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
<div class="mySlides w3-display-container w3-center">
    <img src="img/6.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
     
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/7.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
     
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/9.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
     
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/10.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
     
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/8.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
          
    </div>
  </div>

  <p>Our Cafe can now accept payment for food and drinks via our students' SmartRider cards. The service is provided by Online Canteen which allows parents to load money onto your student's SmartRider once it has been activated.

NOTE: Students can not use money from Transperth which is loaded onto their SmartRider. The card must be registered, activated and money loaded using the following details.

Step 1. Create an account at the www.ouronlinecanteen.com.au website (link below).

Step 2. You will then be sent an email from "our online canteen" and you can activate your account.

Step 3. Click on the "add student" button and add your student details .

Step 4. Click on the student tab at the top right side of the webpage.

Step 5. Register your card.

Step 6. From here you can add credit to the card.

The students can not use money from Transperth at the canteen.

You can view what the students are ordering or order in advance and students can collect from the roller door at the Café rather than having to line up.

I hope this information helps you. The system is brand new today </p>


  <div class="card bg-dark text-white">
  <img class="card-img" src="img/113.png" alt="Card image">
  <div class="card-img-overlay">
    <h5 class="card-title">University of Sabaragamuwa Main Canteen</h5>
    <p class="card-text">Contact Number:0115 777 333<br>Email Address:Maincnteen@gmail.com</p>
   
  </div>
</div>
  <script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
@endsection
