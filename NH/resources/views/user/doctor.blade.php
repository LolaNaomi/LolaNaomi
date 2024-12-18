<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Nusantara Hospital - About Us</title>

  <link rel="icon" href="favicon-2.ico" type="image/x-icon">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
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
      <a class="navbar-brand" href="#">
      <img src="http://localhost/NH/public/assets/img/nusantara hospital-logo.png" alt="Logo" style="width: 175px;">
      </a>

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
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">About Us</a>
            </li>
            <li class="nav-item active">
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


            <!-- List Box that show your Account Profile -->
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

  <body>

<!-- Doctors Section -->
<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">


      @foreach($doctor as $doctors)
    <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img height ="300px" src="doctorimage/{{$doctors->image}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$doctors->name}}</p>
              <span class="text-sm text-grey">{{$doctors->department}}</span>
            </div>
          </div>
        </div>

        @endforeach
      </div>
    </div>
  </div>
  </body>

  @include('user.home')

<!-- Footer Start -->
<footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Managerial Team</a></li>
            <li><a href="#">Career</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>News</h5>
          <ul class="footer-menu">
            <li><a href="#">Mental Health</a></li>
            <li><a href="#">Covid-19</a></li>
            <li><a href="#">Healthy Lifestyle</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Address</h5>
          <ul class="footer-menu">
          <p class="footer-link mt-2">Gading Serpong Boulevard, Indonesia</p>
          <iframe style="height: 150px; width: 250px; zoom: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0521412635544!2d106.61592027485497!3d-6.256861893731644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb56b25975f9%3A0x50c7d605ba8542f5!2sMultimedia%20Nusantara%20University!5e0!3m2!1sen!2sid!4v1686644164695!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </ul>
        </div>

        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <a href="#" class="footer-link">(021) 23456788</a>
          <a href="#" class="footer-link">nusantarahospital@gmail.com</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p class="mb-md-0">&copy; <a class="text-primary" href="#">Nusantara Hospital </a>|| All Rights Reserved. <br> <br>This website has been created to fulfill the requirements of the Web Design & Development's Final Project. <br> On behalf of Information Systems Study Program 2022/2023. <br> Multimedia Nusantara University. <br> &nbsp;&nbsp;&nbsp;</p>
    </div>
  </footer>
  <!-- Footer End -->

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>


</body>
</html>

