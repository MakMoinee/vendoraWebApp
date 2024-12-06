<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Vendora</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .navbar-dark .navbar-brand h1 {
            color: #06A3DA !important;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #000000 !important;
        }

        .navbar-dark .navbar-nav .nav-link:hover,
        .navbar-dark .navbar-nav .nav-link.active {
            color: #06A3DA !important;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    {{-- <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i> Balamban, Cebu</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                            class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End --> --}}


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="/" class="navbar-brand p-0">
                <h1 class="m-0"><img src="/logo.png" class="me-2" alt="" srcset="" width="46px"
                        height="46px">Vendora</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/user_home" class="nav-item nav-link active">Home</a>
                    <a href="/user_machine" class="nav-item nav-link">Machines</a>
                    {{-- <a href="/savings" class="nav-item nav-link">Savings</a> --}}
                    <a href="/withdraw" class="nav-item nav-link">Withdrawals</a>
                    <a href="/logs" class="nav-item nav-link">Coin Counter Logs</a>
                    <a href="/reports" class="nav-item nav-link">Reports</a>
                    <a href="/settings" class="nav-item nav-link">Settings</a>
                </div>
                <a data-bs-target="#logoutModal" data-bs-toggle="modal"
                    class="btn btn-primary py-2 px-4 ms-3">Logout</a>
            </div>
        </nav>

    </div>
    <!-- Navbar & Carousel End -->



    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="about">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h1 class="mb-0">Dashboard Overview</h1>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-dark bg-white">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div style="height: 120px;">
                                <div>Total Sales</div>
                                <div class="fs-4 fw-semibold">P{{ number_format($totalSavings + $totalExp, 2) }}</div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-dark bg-white">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div style="height: 120px;">
                                <div>Total Expenses</div>
                                <div class="fs-4 fw-semibold">P{{ number_format($totalExp, 2) }}</div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-dark bg-white">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div style="height: 120px;">
                                <div>Total Savings</div>
                                <div class="fs-4 fw-semibold">P{{ number_format($totalSavings, 2) }}</div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-dark bg-white">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div style="height: 120px;">
                                <div>Total Coins Counted</div>
                                <div class="fs-4 fw-semibold">P{{ number_format($totalCoin, 2) }}</div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-dark bg-white">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div style="height: 120px;">
                                <div>Total Withdrawal</div>
                                <div class="fs-4 fw-semibold">P{{ number_format($totalSavings + $totalExp, 2) }}</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->





  


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <div class="modal fade" id="createAccountModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="createAccountModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="createAccountModalLabel">Create Your Account Now</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/" method="post" autocomplete="off">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="firstName" class="text-dark">First Name:</label>
                            <br>
                            <input required type="text" name="firstName" id="" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="middleName" class="text-dark">Middle Name:</label>
                            <br>
                            <input type="text" name="middleName" id="" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="lastName" class="text-dark">Last Name:</label>
                            <br>
                            <input required type="text" name="lastName" id="" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="address">Address:</label>
                            <br>
                            <textarea required name="address" id="" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-2">
                            <label for="birthDate">Birth Date</label>
                            <br>
                            <input required type="date" name="birthDate" id="" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="phoneNumber">Phone Number:</label>
                            <br>
                            <input required type="number" name="phoneNumber" id="" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="username">Username:</label>
                            <br>
                            <input required type="text" name="username" id="" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="password">Password:</label>
                            <br>
                            <input required type="password" name="password" id="" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="confirmPass">Confirm Password:</label>
                            <br>
                            <input required type="password" name="confirmPass" id="" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="btnCreateAccount" value="yes">Create
                            Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="logoutModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="logoutModalLabel">Attention</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/logout" method="get">
                    <div class="modal-body">
                        @csrf
                        <h5>Are You Sure You Want To Logout ?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="btnLogout" value="yes">Yes,
                            Proceed</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if (session()->pull('passwordNotMatch'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Password Not Match, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('passwordNotMatch') }}
    @endif

    @if (session()->pull('errorExistUsername'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Username Exist, Please Try Again A New Username Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorExistUsername') }}
    @endif


    @if (session()->pull('errorAddUser'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Wrong Username or Password',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorAddUser') }}
    @endif
    @if (session()->pull('successLogin'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Login',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successLogin') }}
    @endif
</body>

</html>
