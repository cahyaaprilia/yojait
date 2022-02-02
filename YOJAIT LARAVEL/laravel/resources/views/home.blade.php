<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOJAIT</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets\css\style.css"> 
    <link rel="icon" href="assets\img\logo.png">
    <link rel="stylesheet" href="{{asset('css')}}style.css">

<body>
  <nav class="navbar navbar-expand-lg navbar-light py-1">
    <div class="container-fluid">
      <a href="{{route('home')}}">
        <img src="assets\img\logo.png" alt="" width="70" height="70">
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('booking')}}">BOOKING</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('activity')}}">ACTIVITY</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('profile')}}">SETTING</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">ABOUT US</a>
          </li>
      </div>
        <div class="col-md-3 text-center mb-4">
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="btn btn-primary mr-2" type="submit" style="background:rgb(56, 56, 52)">logout</button>

            </form>
        </div>
    </div>
  </nav>

  <section id="home">
     <div class ="container text-center">
       <h1>  YOJAIT </h1>
       <p> ”Merupakan website yang memudahkan masyarakat <br> untuk menjait pakaian tanpa ribet dan keluar rumah.”</p>
       <a class="btn btn-outline-primary" href="booking.html" role="button">Booking Now</a>
  </section>
    <!--Footer Start-->
    <footer id="footer" class="footer-1">
    <div class="main-footer widgets-dark typo-light">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 p-2 ">
            <div class="widget subscribe no-box">
              <h5 class="widget-title">TELEPON<span></span></h5>
              <p>082159638541</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 p-2">
            <div class="widget no-box">
              <h5 class="widget-title">EMAIL<span></span></h5>
              <p>emailnya_yojait@gmail.com</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 p-2">
            <div class="widget no-box">
              <h5 class="widget-title">INSTAGRAM<span></span></h5>
              <p>@yojait_aja</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 p-2 ">
            <div class="widget no-box">
              <h5 class="widget-title">LOKASI<span></span></h5>
              <p>Jakarta,Indonesia</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>Copyright Design Sherif Hamdy © 2019. All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
    <!--Footer End-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</head>
</html>
