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
    </head>
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
              <li class="topnav-centered" >
                <h1>ACTIVITY</h1>
              </li>
              <li class="nav-item">
                <a href="{{route('signin')}}">
                <i class="far fa-user-circle" style="color : white;"></i>
              </a>
              </li>
          </div>
        </div>
      </nav>
    <section id="bg">
    <div class="container text-center">
        <div class="row" style="margin-top: 60px;">
            <div class="col" style="margin-left: 80px;">
                <div class="card" style="width: 13rem;">
                  <a href="{{route('wishlist')}}">  
                  <img src="assets\img\wishlist.png" class="card-img-top" alt="">
                </a>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 13rem;">
                  <a href="{{route('process')}}"> 
                    <img src="assets\img\process.png" class="card-img-top" alt="">
                  </a>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 13rem;">
                  <a href="{{route('done')}}"> 
                    <img src="assets\img\done.png" class="card-img-top" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>