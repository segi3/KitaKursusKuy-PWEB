
<!DOCTYPE html>
<html lang="en">

<head>

    
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Murid Privat</title>


<link href="../../../assets/dashboard_resources/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">


<link href="../../../assets/dashboard_resources/css/sb-admin-2.min.css" rel="stylesheet">

<link href="../../../assets/dashboard_resources/css/style.css" rel="stylesheet">

<script
			  src="https://code.jquery.com/jquery-3.5.1.min.js"
			  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			  crossorigin="anonymous"></script>




</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

    <div class="sidebar-brand-text mx-3"><span id="jd1">Cari</span><span id="jd2">Privat</span><span
            id="jd3">Yuk!</span></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="/KitaKursusKuy-PWEB/tutor/dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Home</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading Privat -->
<div class="sidebar-heading">
    Privat
</div>

<!-- Nav Item - Privat -->
<li class="nav-item">
    <a class="nav-link" href="/KitaKursusKuy-PWEB/tutor/dashboard/privat-request">
        <i class="fas fa-fw fa-table"></i>
        <span>Permintaan Privat</span></a>
</li>

<!-- Nav Item - Privat -->
<li class="nav-item active">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePrivat"
        aria-expanded="true" aria-controls="collapsePrivat">
        <i class="fas fa-fw fa-table"></i>
        <span>Privat Saya</span>
    </a>
    <div id="collapsePrivat" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Privat</h6>
            <a class="collapse-item" href="/KitaKursusKuy-PWEB/tutor/dashboard/my-privat">Privat Saya</a>

            <h6 class="collapse-header">Murid</h6>
            <a class="collapse-item active" href="/KitaKursusKuy-PWEB/tutor/dashboard/my-students">Murid saya</a>
        </div>
    </div>
</li>


<!-- Nav Item - Privat -->
<li class="nav-item">
    <a class="nav-link" href="/KitaKursusKuy-PWEB/tutor/dashboard/create-privat">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Buat Privat</span></a>
</li>



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Tutor Name</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Murid Privat</h1>
</div>

<div class="containerrow">
    <div class="col-lg-12 card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Privat</th>
                            <th>Jam Total</th>
                            <th>Jam Terlaksana</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Abdur Rohman</td>
                            <td>Python Master Class</td>
                            <td>6</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>M Frediansyah</td>
                            <td>Fotografi Bagi Pemula</td>
                            <td>12</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Rafi Yudhistira</td>
                            <td>Fotografi Bagi Pemula</td>
                            <td>15</td>
                            <td>10</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<div class="d-sm-flex align-items-center justify-content-between my-4">
    <h1 class="h3 mb-0 text-gray-800">Jadwal</h1>
    <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal"
        data-target="#jadwalModal">
        Buat Jadwal
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="jadwalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buat Jadwal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Pilih Privat</label>
                        <select class="form-control" id="exampleFormControlSelect2">
                            <option selected="selected">Fotografi Bagi Pemula</option>
                            <option>Python Master Class</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect3">Pilih Murid</label>
                        <select class="form-control" id="exampleFormControlSelect3">
                            <option>M Frediansyah</option>
                            <option>Rafi Yudhistira</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect4">Pilih Subjek</label>
                        <select class="form-control" id="exampleFormControlSelect4">
                            <option>Komposisi cahaya</option>
                            <option>Komposisi foto</option>
                            <option>Foto Makro</option>
                            <option>Foto Landscape</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Waktu</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail5">Durasi (jam)</label>
                                <input type="email" class="form-control" id="exampleInputEmail5" aria-describedby="emailHelp" placeholder="durasi">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-check">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                      Online
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                      Offline
                                    </label>
                                  </div>
                              </div>
                            <div class="form-group">
                                <label for="exampleInputEmail6">Lokasi</label>
                                <input type="email" class="form-control" id="exampleInputEmail6" aria-describedby="emailHelp" placeholder="lokasi">
                                <small id="emailHelp" class="form-text text-muted">Online hanya tulis link meeting</small>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="containerrow">
    <div class="col-lg-12 card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Privat</th>
                            <th>Subjek</th>
                            <th>Waktu</th>
                            <th>Durasi</th>
                            <th>Lokasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Rafi Yudhistira</td>
                            <td>Fotografi Bagi Pemula</td>
                            <td>Komposisi foto</td>
                            <td>20 Nov 2020 <span class="badge badge-dark">19.00 WIB</span></td>
                            <td>2 Jam</td>
                            <td>Rumah Murid</td>
                        </tr>
                        <tr>
                            <td>Rafi Yudhistira</td>
                            <td>Fotografi Bagi Pemula</td>
                            <td>Komposisi foto</td>
                            <td>18 Nov 2020 <span class="badge badge-dark">19.00 WIB</span></td>
                            <td>2 Jam</td>
                            <td>Rumah Murid</td>
                        </tr>
                        <tr>
                            <td>Rafi Yudhistira</td>
                            <td>Fotografi Bagi Pemula</td>
                            <td>Komposisi foto</td>
                            <td>14 Nov 2020 <span class="badge badge-dark">19.00 WIB</span></td>
                            <td>2 Jam</td>
                            <td>Rumah Murid</td>
                        </tr>
                        <tr>
                            <td>Abdur Rohman</td>
                            <td>Python Master Class</td>
                            <td>Komposisi foto</td>
                            <td>14 Nov 2020 <span class="badge badge-dark">08.00 WIB</span></td>
                            <td>2 Jam</td>
                            <td><a href="">Zoom</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; CariPrivatYuk 2021</span>
        </div>
    </div>
</footer>            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
<script src="../../../assets/dashboard_resources/vendor/jquery/jquery.min.js"></script>
<script src="../../../assets/dashboard_resources/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../../../assets/dashboard_resources/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../../../assets/dashboard_resources/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="../../../assets/dashboard_resources/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="../../../assets/dashboard_resources/js/demo/chart-area-demo.js"></script>
<script src="../../../assets/dashboard_resources/js/demo/chart-pie-demo.js"></script>
    
    

</body>

</html>
