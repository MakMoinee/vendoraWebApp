<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Vendora</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <meta name="csrf-token" content="{{ csrf_token() }}">
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
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 sticky-top shadow-sm" id="myNav">
            <a href="/" class="navbar-brand p-0">
                <h1 class="m-0"><img src="/logo.png" class="me-2" alt="" srcset="" width="46px"
                        height="46px">Vendora</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/user_home" class="nav-item nav-link ">Home</a>
                    <a href="/user_machine" class="nav-item nav-link ">Machines</a>
                    <a href="/savings" class="nav-item nav-link ">Savings</a>
                    <a href="/withdraw" class="nav-item nav-link active">Withdrawals</a>
                    <a href="/reports" class="nav-item nav-link">Reports</a>
                    <a href="/logs" class="nav-item nav-link">Coin Counter Logs</a>
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
                <div class="col-lg-12">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Withdrawals</h5>
                        <h1 class="mb-0">Balance Overview</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="machine" class="text-dark">Choose Machine:</label>
                        <div class="row">
                            <div class="col-lg-5 d-flex">
                                <select name="machine" id="selectedMachine"
                                    class="form-control text-dark bg-white me-2">
                                    @foreach ($machines as $item)
                                        <option value="{{ $item->ip }}">{{ $item->ip }}</option>
                                    @endforeach
                                </select>
                                <button class="btn btn-primary" onclick="refreshPeso()">Enter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-dark bg-white">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div style="height: 120px;">
                                <div>Total Available Balance</div>
                                <div class="fs-4 fw-semibold">
                                    <h3 id="allData">P0.00</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-dark bg-white">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div style="height: 120px;">
                                <div>Total 10 Peso Coins</div>
                                <div class="fs-4 fw-semibold">
                                    <h3 id="tenData">P0.00</h3>
                                </div>
                                <button data-bs-toggle="modal" data-bs-target="#withdrawModal"
                                    onclick="withdraw(10);" class="btn btn-primary mt-2">Withdraw</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-dark bg-white">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div style="height: 120px;">
                                <div>Total 5 Peso Coins</div>
                                <div class="fs-4 fw-semibold">
                                    <h3 id="fiveData">P0.00</h3>
                                </div>
                                <button data-bs-toggle="modal" data-bs-target="#withdrawModal" onclick="withdraw(5);"
                                    class="btn btn-primary mt-2">Withdraw</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-dark bg-white">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div style="height: 120px;">
                                <div>Total 1 Peso Coins</div>
                                <div class="fs-4 fw-semibold">
                                    <h3 id="pesoData">P0.00</h3>
                                </div>
                                <button data-bs-toggle="modal" data-bs-target="#withdrawModal" onclick="withdraw(1);"
                                    class="btn btn-primary mt-2">Withdraw</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h1 class="mb-0">Withdrawal History</h1>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card bg-white">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group d-flex">
                                        <input type="search" name="machine" id="" class="form-control"
                                            placeholder="Enter Machine">
                                        <button class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table border mb-0">
                                    <thead class="table-light fw-semibold">
                                        <tr class="align-middle">
                                            <th class="text-center">ID</th>
                                            <th>Machine</th>
                                            <th class="text-center">Money Denomination</th>
                                            <th>Amount Withdrawn</th>
                                            <th class="text-center">Amount Remaining</th>
                                            <th>Purpose</th>
                                            <th class="text-center">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allWithdraws as $item)
                                            <tr class="align-middle">
                                                <td class="text-center">
                                                    {{ $item->withdrawID }}
                                                </td>
                                                <td>
                                                    {{ $item->ip }}
                                                </td>
                                                <td class="text-center">
                                                    P{{ number_format($item->denomination, 2) }}
                                                </td>
                                                <td>
                                                    P{{ number_format($item->total, 2) }}
                                                </td>
                                                <td class="text-center">
                                                    P{{ number_format($item->remaining, 2) }}
                                                </td>
                                                <td>
                                                    {{ $item->purpose }}
                                                </td>
                                                <td class="text-center">
                                                    {{ (new DateTime($item->created_at))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y-m-d h:i A') }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pagination">
                                        <ul class="pagination">
                                            @for ($i = 1; $i <= $allWithdraws->lastPage(); $i++)
                                                <li class="page-item ">
                                                    <a class="page-link {{ $allWithdraws->currentPage() == $i ? 'active text-danger' : 'text-dark' }}"
                                                        href="{{ $allWithdraws->url($i) }}">{{ $i }}</a>
                                                </li>
                                            @endfor
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->





    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div
                        class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"> <img src="/logo.png" width="26px" height="26px"
                                    alt="" srcset=""> Vendora</h1>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Balamban, Cebu</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">info@example.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+012 345 67890</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-light" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Popular Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-light" href="#"><i
                                        class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Vendora</a>. All
                            Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->



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

    <div class="modal fade" id="addMachineModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="addMachineModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addMachineModalLabel">Connect Your Machine Now</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/user_machine" method="post" autocomplete="off">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="description" class="text-dark">Description:</label>
                            <br>
                            <input required type="text" name="description" id="" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="ip" class="text-dark">IP:</label>
                            <br>
                            <input required type="text" name="ip" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <p><b>Note:</b> Make Sure That The Machine Is <b>Online</b> and <b>Pingable</b>. Otherwise,
                                it'll be
                                failed. And also, Make Sure That You Are Connected With The <b>Same Network</b> with the
                                device</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="btnAddMachine" value="yes">Add
                            Machine</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editMachineModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="editMachineModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editMachineModalLabel">Update Machine Information</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="updateMachineForm" action="/user_machine" method="post" autocomplete="off">
                    @method('put')
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-2">
                            <label for="description" class="text-dark">Description:</label>
                            <br>
                            <input required type="text" name="description" id="updateDescription"
                                class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="ip" class="text-dark">IP:</label>
                            <br>
                            <input readonly required type="text" id="updateIP" class="form-control">
                        </div>
                        <div class="form-group">
                            <p><b>Note:</b> Make Sure That The Machine Is <b>Online</b> and <b>Pingable</b>. Otherwise,
                                it'll be
                                failed. And also, Make Sure That You Are Connected With The <b>Same Network</b> with the
                                device</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="btnUpdateMachine" value="yes">Update
                            Machine</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteMachineModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="deleteMachineModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteMachineModalLabel">Attention</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="deleteMachineForm" action="/user_machine" method="post" autocomplete="off">
                    @method('delete')
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <h5>Are You Sure You Want Delete This Machine?</h5>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="btnDeleteMachine" value="yes">Yes
                            Proceed</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="withdrawModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="withdrawModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="withdrawModalLabel">Withdraw Money</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/withdraw" id="withdrawForm" method="post" autocomplete="off">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="avail" class="text-dark">Available Total :</label>
                            <br>
                            <input readonly style="cursor: not-allowed;" required type="number" step="any"
                                name="avail" id="avail" class="form-control">
                            <input type="hidden" name="denom" id="denom">
                            <input type="hidden" name="withdrawIP" id="withdrawIP">
                        </div>
                        <div class="form-group mb-2">
                            <label for="withdrawAmount" class="text-dark">Amount to be withdrawn:</label>
                            <br>
                            <input required type="number" step="any" name="withdrawAmount" id=""
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="purpose" class="text-dark">Purpose:</label>
                            <br>
                            <select name="purpose" id="" class="form-control bg-white">
                                <option value="savings">Savings</option>
                                <option value="expenses">Expenses</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="btnWithdraw" name="btnWithdraw"
                            value="yes">Withdraw
                            Money</button>
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


    @if (session()->pull('errorAddMachine'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed to add machine, Please try again later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorAddMachine') }}
    @endif
    @if (session()->pull('successAddMachine'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Added Machine',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successAddMachine') }}
    @endif
    @if (session()->pull('successDeleteMachine'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Deleted Machine',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successDeleteMachine') }}
    @endif

    @if (session()->pull('errorDeleteMachine'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed to delete machine, Please try again later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorDeleteMachine') }}
    @endif

    @if (session()->pull('succcessWithdraw'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Withdraw From Machine',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('succcessWithdraw') }}
    @endif

    @if (session()->pull('errorWithdraw'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed to withdraw from machine, Please try again later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorWithdraw') }}
    @endif

    <script>
        let total = 0;
        let totalPeso = 0;
        let totalFive = 0;
        let totalTen = 0;

        function withdraw(amount) {
            let denom = document.getElementById('denom');
            denom.value = amount;
            let selectedMachine = document.getElementById('selectedMachine');
            let withdrawIP = document.getElementById('withdrawIP');
            withdrawIP.value = selectedMachine.value;

            if (amount == 1) {
                let avail = document.getElementById('avail');
                avail.value = `${totalPeso}.00`;
                let btnWithdraw = document.getElementById('btnWithdraw');
                let withdrawForm = document.getElementById('withdrawForm');
                if (totalPeso <= 0) {
                    btnWithdraw.removeAttribute("class");
                    btnWithdraw.setAttribute("class", "btn btn-primary disabled");
                    withdrawForm.removeAttribute("onsubmit");
                    withdrawForm.setAttribute("onsubmit", "return false;");
                } else {
                    btnWithdraw.removeAttribute("class");
                    btnWithdraw.setAttribute("class", "btn btn-primary");
                    withdrawForm.removeAttribute("onsubmit");
                }
            } else if (amount == 5) {
                let avail = document.getElementById('avail');
                avail.value = `${totalFive}.00`;
                let btnWithdraw = document.getElementById('btnWithdraw');
                let withdrawForm = document.getElementById('withdrawForm');
                if (totalFive <= 0) {
                    btnWithdraw.removeAttribute("class");
                    btnWithdraw.setAttribute("class", "btn btn-primary disabled");
                    withdrawForm.removeAttribute("onsubmit");
                    withdrawForm.setAttribute("onsubmit", "return false;");
                } else {
                    btnWithdraw.removeAttribute("class");
                    btnWithdraw.setAttribute("class", "btn btn-primary");
                    withdrawForm.removeAttribute("onsubmit");
                }
            } else if (amount == 10) {
                let avail = document.getElementById('avail');
                avail.value = `${totalTen}.00`;
                let btnWithdraw = document.getElementById('btnWithdraw');
                let withdrawForm = document.getElementById('withdrawForm');
                if (totalTen <= 0) {
                    btnWithdraw.removeAttribute("class");
                    btnWithdraw.setAttribute("class", "btn btn-primary disabled")
                    withdrawForm.removeAttribute("onsubmit");
                    withdrawForm.setAttribute("onsubmit", "return false;");
                } else {
                    btnWithdraw.removeAttribute("class");
                    btnWithdraw.setAttribute("class", "btn btn-primary");
                    withdrawForm.removeAttribute("onsubmit");
                }
            }
        }
        async function fetchCoinCount(ip, denom) {
            const apiUrl =
                `http://${ip}/${denom}/count`; // Replace <IP_ADDRESS> with the actual IP address of the server.

            try {
                // Make the API call
                const response = await fetch(apiUrl);

                // Check if the response is OK (status code 200-299)
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                // Parse the JSON response
                const data = await response.json();

                // Extract the Coin Count
                if (data['Coin Count'] !== undefined) {
                    console.log(`Coin Count: ${data['Coin Count']}`);
                    return data['Coin Count'];
                } else {
                    throw new Error('Coin Count key not found in response');
                }
            } catch (error) {
                console.error('Error fetching Coin Count:', error);
                return null;
            }
        }

        function refreshPeso() {
            total = 0;
            totalPeso = 0;
            totalFive = 0;
            totalTen = 0;
            let selectedMachine = document.getElementById('selectedMachine');
            console.log(selectedMachine.value);
            fetchCoinCount(selectedMachine.value, 1).then((coinCount) => {
                if (coinCount !== null) {
                    // Do something with the coin count
                    console.log(`Retrieved Coin Count: ${coinCount}`);
                    let pesoData = document.getElementById('pesoData');
                    pesoData.innerHTML = `P${coinCount}.00`;
                    totalPeso = coinCount;

                } else {
                    console.log('Failed to retrieve Coin Count');
                    let pesoData = document.getElementById('pesoData');
                    pesoData.innerHTML = 'P0.00';
                }
            });

            refreshFive();
            refreshTen();
            setTimeout(() => {
                let allData = document.getElementById('allData');
                total = totalPeso + totalFive + totalTen;
                allData.innerHTML = `P${total}.00`;
            }, 3000);

            setTimeout(() => {
                storeLogs();
            }, 3000);
        }

        function refreshFive() {
            let selectedMachine = document.getElementById('selectedMachine');
            console.log(selectedMachine.value);
            fetchCoinCount(selectedMachine.value, 5).then((coinCount) => {
                if (coinCount !== null) {
                    // Do something with the coin count
                    console.log(`Retrieved Coin Count: ${coinCount}`);
                    let pesoData = document.getElementById('fiveData');
                    pesoData.innerHTML = `P${coinCount}.00`;
                    totalFive = coinCount;
                } else {
                    console.log('Failed to retrieve Coin Count');
                    let fiveData = document.getElementById('fiveData');
                    fiveData.innerHTML = 'P0.00';
                    totalFive = 0;
                }
            });
        }

        function refreshTen() {
            let selectedMachine = document.getElementById('selectedMachine');
            console.log(selectedMachine.value);
            fetchCoinCount(selectedMachine.value, 10).then((coinCount) => {
                if (coinCount !== null) {
                    // Do something with the coin count
                    console.log(`Retrieved Coin Count: ${coinCount}`);
                    let pesoData = document.getElementById('tenData');
                    pesoData.innerHTML = `P${coinCount}.00`;
                    totalTen = coinCount;
                } else {
                    console.log('Failed to retrieve Coin Count');
                    let pesoData = document.getElementById('tenData');
                    pesoData.innerHTML = 'P0.00';
                    totalTen = 0;
                }
            });
        }

        function storeLogs() {
            const data = {
                totalAmount: totalTen + totalFive + totalPeso,
                totalTenCoin: totalTen,
                totalFiveCoin: totalFive,
                totalPesoCoin: totalPeso,
                btnStoreLogs: true // Flag to trigger the log storage logic on backend
            };
            fetch(`/withdraw`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content') // For CSRF protection
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(responseData => {
                    if (responseData.success) {
                        console.log('Log saved successfully!');
                    } else {
                        console.log('Failed to save log.');
                    }
                })
                .catch(error => {
                    console.log('Error:', error);
                    console.log('Error saving log.');
                });
        }

        try {
            setTimeout(() => {
                refreshPeso();
            }, 2000);
        } catch (e) {

        }
    </script>
</body>

</html>
