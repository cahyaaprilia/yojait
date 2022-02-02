<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <title>ADMIN YOJAIT</title>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="icon" href="../assets/img/logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <div class="logo_name">YOJAIT</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="{{route('dashboard')}}">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="{{route('dashboard-user')}}">
                    <i class='bx bx-user'></i>
                    <span class="links_name">User</span>
                </a>
                <span class="tooltip">User</span>
            </li>
            <li>
                <a href="{{route('dashboard-pesanan')}}">
                    <i class='bx bx-cart-alt'></i>
                    <span class="links_name">Order</span>
                </a>
                <span class="tooltip">Order</span>
            </li>
            <li>
            <li>
                <a href="{{route('dashboard-history')}}">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">History</span>
                </a>
                <span class="tooltip">History</span>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="text">ORDERAN PELANGGAN {{($booking->nama)}}</div>
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button></div>
                </nav>
            </div>
        </div>
        <!-- <div class="row mb-3"> -->
            <!-- <div class="col-lg-8">
                <div class="row">
                    <div class="col">
                        <div class="card shadow mb-3">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="username"><strong>Nama Pelanggan : </strong> </label></div>
                                        <div class="form-group"><label for="username"><strong>Type Baju : </strong></label></div>
                                        <div class="form-group"><label for="username"><strong>Alamat Pelanggan : </strong></label></div>
                                        <div class="form-group"><label for="username"><strong>Keterangan : <span> </strong><span></label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="col">
                <form action="{{ route('view.booking.update', $booking->id) }}" method="POST">
                    @csrf
                    @method('PATCH');
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold"><label for="signature" style="color: rgb(255,15,0);"><strong>Keterangan*</strong><br></label></p>
                        </div>
                        <div class="col">
                                        <div class="form-group"><label for="username"><strong>Nama Pelanggan : </strong></label> {{($booking->nama)}}</div>
                                        <div class="form-group"><label for="username"><strong>Alamat Pelanggan : </strong></label> {{($booking->alamat)}}</div>
                                        <div class="form-group"><label for="username"><strong>Start Date : </strong></label> {{($booking->start_date)}}</div>
                                        <div class="form-group"><label for="username"><strong>End Date : </strong></label> {{($booking->end_date)}}</div>
                                        <div class="form-group"><label for="username"><strong>Type Baju : </strong></label> {{($booking->type)}}</div>
                                    </div>
                        <div class="card-body"><label for="signature" style="color: #4E73DF;"><strong>Status*</strong><br></label>
                            <select class="flex-fill" name="status" required="" style="margin: 15px;">
                                <optgroup label="Select Status">
                                    <option value="In Process">In Process</option>
                                    <option value="Done">Done</option>
                                    <option value="Full">Full</option>
                                </optgroup>
                            </select>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group"><button class="btn btn-primary " value="submit" type="submit">Konfimasi</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        <!-- </div> -->
    </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
            }
        }
    </script>
</body>

</html>