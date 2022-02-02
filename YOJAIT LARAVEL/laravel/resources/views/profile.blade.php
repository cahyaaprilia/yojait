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
            <a href="/home">
                <img src="assets\img\logo.png" alt="" width="70" height="70">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            </ul>
          </div>
        </div>
      </nav>
    <section id="profile">
    <div class="global-container"> 
        <div class="card  profile-form">
            <div class="card-body">
                <h1 class="card-title text-center" style="font-family: monospace;">P R O F I L E</h1>
            </div>
            <div class="card-text">
                <form>
                <div class="medsos text-center">
                    <ul>
                        <li>
                            <a href="profile.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="color : black;">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                              </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                    <div class="mb-3">
                        <input type="fullname" class="form-control text-center" id="exampleInputFullname" aria-describedby="FullnameHelp" placeholder="Full name">
                    </div>
                    <div class="mb-3">
                        <input type="alamat" class="form-control text-center" id="exampleInputAlamat" aria-describedby="AlamatHelp" placeholder="Alamat">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control text-center" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="buton text-center">
                        <div class="mb-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>
  </body>
</html>