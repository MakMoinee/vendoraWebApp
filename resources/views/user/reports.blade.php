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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                    <a href="/reports" class="nav-item nav-link active">Reports</a>
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
                        <h1 class="mb-0">Generate Report</h1>
                    </div>
                </div>
            </div>
            <br>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <form action="/reports" method="get">
                        @csrf
                        <div class="card mb-4 text-dark bg-white">
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group mb-2">
                                                <label for="reportType">Report Type:</label>
                                                <br>
                                                <select style="cursor: pointer;" name="reportType" id=""
                                                    class="form-control bg-white text-dark mt-1">
                                                    <option value="weekly">Weekly Report</option>
                                                    <option value="monthly">Monthly Report</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group mb-2">
                                                <label for="start">Start Date:</label>
                                                <br>
                                                <input required type="date" name="start" id=""
                                                    class="form-control mt-1 bg-white text-dark">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group mb-2">
                                                <label for="end">End Date:</label>
                                                <br>
                                                <input required type="date" name="ends" id=""
                                                    class="form-control mt-1 bg-white text-dark">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <button style="width: 100%; height: 70px;" type="submit"
                                                    class="btn btn-success text-white">GENERATE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="card mb-4 text-dark bg-white">

                        <div class="card-header d-flex">
                            <h5>{{ $prefix }} Sales Graph</h5>
                            <br>
                            <button style="margin-left: 20px;" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#reportModal">
                                Export
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <canvas id="myChart"></canvas>
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

    <div class="modal fade" id="reportModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="reportModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="reportModalLabel">Report</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table border mb-0">
                                            <thead class="table-light fw-semibold">
                                                <tr class="align-middle">
                                                    <th class="text-center">Month & Year / Week</th>
                                                    <th>Total</th>
                                                    <th class="text-center"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($labels as $item)
                                                    <tr class="align-middle">
                                                        <td class="text-center">
                                                            {{ $item }}
                                                        </td>
                                                        <td>
                                                            P{{ number_format($tbl[$item], 2) }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr class="align-middle">
                                                    <td class="text-center"><b>Total:</b></td>
                                                    <td>P{{ number_format($total, 2) }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" onclick="exportTableToPDF()">Export</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js"></script>


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

        const ctx = document.getElementById('myChart').getContext('2d');

        const myChart = new Chart(ctx, {
            type: 'bar', // Change to 'line', 'pie', etc., as needed
            data: {
                labels: @json($labels), // Labels for X-axis
                datasets: [{
                    label: 'Sales Data',
                    data: @json($data), // Data for Y-axis
                    backgroundColor: 'rgba(54, 162, 235, 0.5)', // Bar color
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        function generatePDF() {
            const canvas = document.getElementById('myChart');
            const pdf = new jspdf.jsPDF();

            // Convert the canvas to an image and add to the PDF
            html2canvas(canvas).then((canvasImage) => {
                const imgData = canvasImage.toDataURL('image/png');
                const imgWidth = 190; // Scale width to fit A4
                const pageHeight = 297; // A4 height in mm
                const imgHeight = (canvasImage.height * imgWidth) / canvasImage.width;
                const position = 10;

                pdf.addImage(imgData, 'PNG', 10, position, imgWidth, imgHeight);
                pdf.save('SalesGraph.pdf');
            });
        }
        async function exportTableToPDF() {
            const {
                jsPDF
            } = window.jspdf;
            const doc = new jsPDF();

            // Add a title to the PDF
            doc.text("Vendora Report - Summary", 14, 15);

            // Get table data
            const table = document.querySelector(".table-responsive table");

            // Use autoTable to parse and generate the table in PDF
            doc.autoTable({
                html: table, // Automatically extracts table content
                startY: 20, // Space below the title
                styles: {
                    fontSize: 10,
                    cellPadding: 5
                }, // Custom styles
                headStyles: {
                    fillColor: [41, 128, 185]
                }, // Header background color
                margin: {
                    top: 20
                },
            });

            // Save the PDF
            doc.save("table-summary.pdf");
        }
    </script>
</body>

</html>
