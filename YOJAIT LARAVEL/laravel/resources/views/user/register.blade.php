<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../static/main.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>WEBSITE YOJAIT OFFICIAL</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets\css\style.css"> 
    <link rel="icon" href="assets\img\logo.png">
    <link href="{{asset('css')}}style.css" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-1">
        <div class="container-fluid">
          <a href="index.html">
            <img src="assets\img\logo.png" alt="" width="50" height="50">
        </a>
        </div>
      </nav>
    <section id="signin">
    <div class="global-container">
        <div class="card signin-form">
            <div class="card-body">
                <h1 class="card-title text-center" style="font-family: monospace;">S I G N  I N</h1>
            </div>
            <div class="card-text">
                <form action="{{route('new-register')}}" method="POST">
                    @csrf
                <legend class="text-center" style="font-family: sans-serif;">Sign in with :</legend>
                <div class="medsos text-center">
                    <ul>
                        <li>
                            <a href="#"><i class="fab fa-google" style="color:black"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram" style="color:black"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter" style="color:black"></i></a>
                        </li>
                    </ul>
                </div>
                    <div class="mb-3">
                        <input type="name" class="form-control text-center" id="exampleInputFullname" aria-describedby="FullnameHelp" 
                        name ="name" placeholder="Full name">
                    </div>
                    <div class="mb-3">
                        <input type="address" class="form-control text-center" id="exampleInputAlamat" aria-describedby="AlamatHelp" 
                        name ="address" placeholder="Alamat">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control text-center" id="exampleInputEmail1" aria-describedby="emailHelp" 
                        name ="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control text-center" id="exampleInputPassword1" 
                        name ="password" placeholder="Password">
                    </div>
{{--                    <div class="mb-3 form-check">--}}
{{--                        <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--                        <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
{{--                    </div>--}}
                    <div class="buton text-center">
                        <div class="mb-2">
                            <button class="btn btn-outline-primary" type="submit" role="button">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
  </body>
</html>
