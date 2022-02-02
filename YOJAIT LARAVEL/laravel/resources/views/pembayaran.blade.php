<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOJAIT</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../assets/css/style.css"> 
    <link rel="icon" href="../assets/img/logo.png">
    <!-- <link rel="stylesheet" href="{{asset('css')}}style.css"> -->
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light py-1">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="topnav-centered">
                        <h2>ACTIVITY</h2>
                    </li>
                    <li class="nav-item">
                        <a href="profile.html">
                            <i class="far fa-user-circle" style="color : white;"></i>
                        </a>
                    </li>
            </div>
        </div>
    </nav>
    <section id="form">

        <div class="mainscreen">
            <!-- <img src="https://image.freepik.com/free-vector/purple-background-with-neon-frame_52683-34124.jpg"  class="bgimg " alt="">-->
            <div class="card2">
              <div class="row">
                <div class="col bg-dark">
                <div class="leftside">
                    <img src="{{url($booking->photo)}}" class="product" alt="" />
                </div>
                <div id="price">
                    <h2>$ 2 700</h2>
                </div>
                </div>
              </div>
                <div class="rightside">
                    <form action="/process" method="POST">
                        <h1>CheckOut</h1>
                        <h2>Payment Information</h2>
                        <p>Cardholder Name</p>
                        <input type="text" class="inputbox" name="name" required />
                        <p>Card Number</p>
                        <input type="number" class="inputbox" name="card_number" id="card_number" required />

                        <p>Card Type</p>
                        <select class="inputbox" name="card_type" id="card_type" required>
                            <option value="">--Select a Card Type--</option>
                            <option value="Visa">Visa</option>
                            <option value="RuPay">RuPay</option>
                            <option value="MasterCard">MasterCard</option>
                        </select>
                        <div class="expcvv">

                            <p class="expcvv_text">Expiry</p>
                            <input type="date" class="inputbox" name="exp_date" id="exp_date" required />
                        </div>
                        <p></p>
                        <button type="submit" class="button">CheckOut</button>
                    </form>
                </div>
            </div>
        </div>


    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>


</html>