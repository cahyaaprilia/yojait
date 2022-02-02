<!doctype html>
<html lang="en">
  <head>
    <title>ADMIN YOJAIT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets\css\dashboard.css">
    <link rel="icon" href="assets\img\logo.png">
  </head>
<body>
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
          <div class="wrap d-md-flex">
            <div class="img" style="background-image:url(assets/img/18ba817bf5284a0d2daff05f58057ef9.jpg)">
          </div>
          <div class="login-wrap p-4 p-md-5">
          @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>

            @endif

            <div class="d-flex">
              <div class="w-100">
                <h3 class="mb-4">Log In</h3>
              </div>
              <div class="w-100">
                <p class="social-media d-flex justify-content-end">
                  <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                  <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                </p>
              </div>
            </div>
            <form action="{{route('loginprocess')}}" class="signin-form" method="POST">
            @csrf
              <div class="form-group mb-3">
                <label class="label" for="name">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username" required>
              </div>
              <div class="form-group mb-3">
                <label class="label" for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
              </div>
              <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Login</button>
              </div>
              <div class="form-group d-md-flex">
                <div class="w-50 text-left">
                  <label class="checkbox-wrap checkbox-primary mb-0">Remember Me

                  <input type="checkbox" checked>
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="w-50 text-md-right">
                <a href="#">Forgot Password</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- <script src="js/jquery.min.js"></script> -->
<!-- <script src="js/popper.js+bootstrap.min.js+main.js.pagespeed.jc.JD3obyg0WD.js"></script><script>eval(mod_pagespeed_YYCwSj$83H);</script> -->
<!-- <script>eval(mod_pagespeed_fUKQzxht9j);</script>
<script>eval(mod_pagespeed_lpntivnFUb);</script> -->
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6d6080bcaae64a95","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
