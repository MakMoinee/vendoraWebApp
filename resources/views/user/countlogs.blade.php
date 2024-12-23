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
                    {{-- <a href="/savings" class="nav-item nav-link">Savings</a> --}}
                    <a href="/withdraw" class="nav-item nav-link">Withdrawals</a>
                    <a href="/reports" class="nav-item nav-link">Reports</a>
                    <a href="/logs" class="nav-item nav-link active">Coin Counter Logs</a>
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
                        <h1 class="mb-0">Coin Counter Logs</h1>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table border mb-0">
                                    <thead class="table-light fw-semibold">
                                        <tr class="align-middle">
                                            <th class="text-center">Log ID</th>
                                            <th>Total Amount</th>
                                            <th class="text-center">Total One Peso Coin</th>
                                            <th>Total Five Peso Coin</th>
                                            <th class="text-center">Total Ten Peso Coin</th>
                                            <th>Log Date</th>
                                            <th class="text-center"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allLogs as $item)
                                            <tr class="align-middle">
                                                <td class="text-center">
                                                    {{ $item->clID }}
                                                </td>
                                                <td>
                                                    P{{ number_format($item->totalAmount, 2) }}
                                                </td>
                                                <td class="text-center">
                                                    P{{ number_format($item->totalPesoCoin, 2) }}
                                                </td>
                                                <td>
                                                    P{{ number_format($item->totalFiveCoin, 2) }}
                                                </td>
                                                <td class="text-center">
                                                    P{{ number_format($item->totalTenCoin, 2) }}
                                                </td>

                                                <td>
                                                    {{ (new DateTime($item->created_at))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y-m-d h:i A') }}
                                                </td>
                                                <td></td>
                                                <td class="text-center"></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="pagination">
                                            <ul class="pagination">
                                                @for ($i = 1; $i <= $allLogs->lastPage(); $i++)
                                                    <li class="page-item ">
                                                        <a class="page-link {{ $allLogs->currentPage() == $i ? 'active' : '' }}"
                                                            href="{{ $allLogs->url($i) }}">{{ $i }}</a>
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

    @if (session()->pull('successUpdateMachine'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Updated Machine',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successUpdateMachine') }}
    @endif

    @if (session()->pull('errorUpdateMachine'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed to update machine, Please try again later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorUpdateMachine') }}
    @endif

    <script>
        function deleteMachine(id) {
            let field = document.getElementById('deleteMachineForm');
            field.action = `/user_machine/${id}`;
        }

        function updateMachine(id, description, ip) {
            let field = document.getElementById('updateMachineForm');
            field.action = `/user_machine/${id}`;

            let updateDescription = document.getElementById('updateDescription');
            updateDescription.value = description;

            let updateIP = document.getElementById('updateIP');
            updateIP.value = ip;
        }
    </script>
</body>

</html>