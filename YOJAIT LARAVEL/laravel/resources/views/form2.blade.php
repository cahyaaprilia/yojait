<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YOJAIT</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <link rel="stylesheet" href="{{asset('css')}}style.css">
  <link rel="stylesheet" href="assets\css\style.css"> 
    <link rel="icon" href="assets\img\logo.png">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">



  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-1">
      <div class="container-fluid">
        <a href="{{route('booking')}}">
          <img src="assets\img\logo.png" alt="" width="50" height="50">
        </a>
      </div>
    </nav>
    <section id="form" style="padding-bottom: 100px;">
      <div class="container text-center">
        <h2></h2>
        <div class="row" style="margin-top: 100px;">
          <div class="container">
            <div class="row">
              <div class="col">
                <img src="assets\img\pemesanan.png" style="height: 500px;" alt="">
              </div>
              <div class="col">
                <div class="global-container">
                  <div class="card form-form">
                    <div class="card-body">
                      <h1 class="card-title text-center" style="font-family: monospace;">Form Pemesanan</h1>
                    </div>
                    <div class="card-text">
                      <form action="{{route('create-booking')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                          <div class="row">
                            <div class="col-md-12 order-md-1">
                                <div class="row">
                                  <div class="col-md-6 mb-1">
                                    <label for="firstName">Nama Depan</label>
                                    <input type="text1" class="form-control" id="firstName" name="nama_depan" placeholder="" value=""
                                      required>
                                    <div class="invalid-feedback">
                                      Valid first name is required.
                                    </div>
                                  </div>
                                  <div class="col-md-6 mb-1">
                                    <label for="lastName">Nama Belakang</label>
                                    <input type="text2" class="form-control" id="lastName" name="nama_belakang" placeholder="" value=""
                                      required>
                                    <input type='hidden' name='type' value = 'Dress or Suit'>
                                    <div class="invalid-feedback">
                                      Valid last name is required.
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="input-group">
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <label for="address">Alamat</label>
                                  <textarea type="alamat" class="form-control" id="address" name="alamat" placeholder="" required></textarea>
                                  <div class="invalid-feedback">
                                    Please enter your shipping address.
                                  </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-expiration">Mulai tanggal</label>
                                    <input type="date" class="form-control" id="cc-expiration" name="start_date" placeholder="" required>
                                    <div class="invalid-feedback">
                                      Expiration date required
                                    </div>
                                  </div>
                                  <div class="col-md-6 mb-3">
                                    <label for="cc-expiration">Sampai tanggal</label>
                                    <input type="date" class="form-control" id="cc-expiration" name="end_date" placeholder="" required>
                                    <div class="invalid-feedback">
                                      Expiration date required
                                    </div>
                                  </div>
                                    Select image to upload : 
                                    <input type="file" name="photo" id="fileToUpload">
                                  <hr class="mb-4">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="same-address">
                                    <label class="custom-control-label" for="same-address">Shipping address is the same
                                      as my billing address</label>
                                  </div>
                                </div>
                                <div class="buton text-center">
                                    <div class="mb-2">
                                      <button type="submit" class="btn btn-outline-primary btn-lg btn-block" >Continue</button>
                                    </div>
                                  </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"></script>
  </body>
  </head>

</html>