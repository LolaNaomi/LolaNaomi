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
            <li class="nav-item active">
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
  <div class="page-hero bg-image overlay-dark" style="background-image: url(http://localhost/NH/public/assets/img/hospital6.jpeg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn" style="font-size: 50px;">
        <span class="subhead">About Nusantara Hospital</span>
      </div>
    </div>
  </div>

  <div class="page-section bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="container text-center wow fadeInUp">
            <h1 style="font-size: 30px;"><b>Nusantara Hospital - Your Health Care Specialist</b></h1>
            <p class="text-grey mb-4" style="text-align:justify; font-size: 18px; margin: center;">
            <br> 
            &nbsp;&nbsp;&nbsp;&nbsp; At Nusantara Hospital, we are dedicated to providing exceptional healthcare services and becoming your trusted healthcare specialist. 
            Our hospital is equipped with state-of-the-art facilities and staffed with highly skilled healthcare professionals who prioritize your well-being and strive to deliver the highest quality of care.
            <br>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp; We understand the importance of comprehensive and personalized healthcare, and that's why we offer a wide range of medical services to cater to your specific needs. 
            Whether you require specialized treatments, surgeries, diagnostic tests, or preventive care, our team is committed to delivering excellence in every aspect of your healthcare journey.
            <br>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp; Our hospital is home to various departments and specialties, including Pediatrics, Ear, Nose, and Throat (ENT), Ophthalmology, Dentistry, Cardiology, General Surgery, Psychiatry, and Internal Medicine. With our multidisciplinary approach, we ensure that you receive holistic and integrated care, tailored to your individual requirements.
            <br>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp; At Nusantara Hospital, we prioritize patient comfort and strive to create a welcoming and caring environment. Our compassionate staff is dedicated to addressing your concerns, providing clear communication, and guiding you through each step of your healthcare experience.
            <br>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp; Additionally, we actively engage in community outreach programs to promote health and wellness beyond the walls of our hospital. We believe in the power of education and preventive care to improve overall health outcomes and contribute to the well-being of our community.
            <br>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp; Choose Nusantara Hospital as your healthcare specialist and experience the highest level of medical expertise, compassionate care, and a commitment to your health and well-being. We are here to serve you and provide the best possible healthcare services to help you lead a healthy and fulfilling life.
            <br>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp; Contact us today to schedule an appointment or learn more about our services. Your health is our priority, and we are honored to be your trusted partner in healthcare.
            </p>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

<!-- Our Team Section -->
    <div class="page-section pb-0">
    <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp" style="font-size: 30px;">Managerial Team</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-1 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="blog-details.html" class="post-thumb">
                <img src="{{asset('assets/img/person/nabila.jpg')}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-center"><a href="">Nabila Az Zahra Paramita</a></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-1 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="blog-details.html" class="post-thumb"> 
                <img src="{{asset('assets/img/person/lola.jpg')}}" alt="">
              </a>
            </div>
            <div class="body">
                <h5 class="post-title text-center"><a href="">Lola Naomi Enzelin Mangunsong</a></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-1 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="blog-details.html" class="post-thumb">
                <img src="{{asset('assets/img/person/haniva.jpg')}}" alt="">
              </a>
            </div>
            <div class="body">
                <h5 class="post-title text-center"><a href="">Haniva Yuniar Praja Putri</a></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-1 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="blog-details.html" class="post-thumb">
                <img src="{{asset('assets/img/person/kayla.jpg')}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-center"><a href="">Kayla Abigail Gunawan</a></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-1 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="blog-details.html" class="post-thumb">
                <img src="{{asset('assets/img/person/naila.jpg')}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-center"><a href="">Naila Asylah Rivitri Lubis</a></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-1 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="blog-details.html" class="post-thumb">
                <img src="{{asset('assets/img/person/114962.jpg')}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-center"><a href="">IS 556-F (Group G)</a></h5>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </div> <!-- .page-section -->



  </body>

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