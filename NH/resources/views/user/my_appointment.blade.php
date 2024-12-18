<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Nusantara Hospital - My Appointment</title>
  <link rel="icon" href="favicon-2.ico" type="image/x-icon">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

  <style>
    .modern-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 16px;
}

.modern-table th,
.modern-table td {
  padding: 10px;
  text-align: center;
}

.modern-table th {
  background-color: grey;
  color: white;
  font-size: 20px;
}

.modern-table tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}

.modern-table tbody tr:hover {
  background-color: #e0e0e0;
}

.cancel-btn {
  display: inline-block;
  padding: 5px 10px;
  background-color: red;
  color: white;
  text-decoration: none;
  border-radius: 5px;
}

.cancel-btn:hover {
  background-color: darkred;
}
  </style>


</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> (021) 23456788</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> nusantarahospital@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"></a>
        <img src="{{asset('assets/img/nusantara hospital-logo.png')}}" alt="Logo" style="width: 175px;">

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>



            @if(Route::has('login'))
            @auth

            <li class="nav-item">
            <a class="btn btn-primary" href="{{url('myappointment')}}">My Appointment</a>
            </li>


            <!-- List Box that show your Account Profile and to logout -->
            <x-app-layout></x-app-layout> 

            
            @else
            <!--LOGIN-->
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" 
              href="{{route('login')}}">Login</a>
            </li>
 
            <!--REGISTER-->
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" 
              href="{{route('register')}}">Register</a>
            </li>
            @endauth
            @endif



          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>



  <!-- PATIENT APPOINTMENT TABLE  -->
  <div align="center" style="padding:70px;">
        <table class="modern-table">
          <thead>
            <tr>
              <th>Doctor Name</th>
              <th>Date</th>
              <th>Message</th>
              <th>Status</th>
              <th>Cancel Appointment</th>
            </tr>
          </thead>
        <tbody>
            @foreach($appoint as $appoints)
            <tr>
              <td>{{$appoints->doctor}}</td>
              <td>{{$appoints->date}}</td>
              <td>{{$appoints->message}}</td>
              <td>{{$appoints->status}}</td>
              <td><a class="cancel-btn" onclick="return confirm('Are you sure you want to cancel this appointment?')" 
              href="{{url('cancel_appoint', $appoints->id)}}">Cancel</a></td>
            </tr>
            @endforeach
        </tbody>
      </table>


      


<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="../assets/vendor/wow/wow.min.js"></script>
<script src="../assets/js/theme.js"></script>
  
</body>
</html>