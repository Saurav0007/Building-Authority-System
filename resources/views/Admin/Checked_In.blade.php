<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BAS Admin Account Details</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/assets/vendors/iconfonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="assets/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="http://www.urbanui.com/" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">

            <a class="navbar-brand brand-logo-mini" href="admin"><img src="assets/assets/images/logo-mini.svg" alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="fas fa-bars"></span>
            </button>
            <ul class="navbar-nav">
                <li class="nav-item nav-search d-none d-md-flex">
                    <div class="nav-link">
                        <div class="input-group">
                            <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-search"></i>
                  </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">

                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        <img src="#" alt="profile"/>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item">
                            <i class="fas fa-power-off text-primary"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="fas fa-bars"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
    @include('admin.navbar')
    <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10">
                                <form action="#" class="row"  method="post">
                                    @csrf
                                    <div class="name"><h2>Public Checked in users</h2></div>
                                    <table class="table table-bordered table-responsive">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Email</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($pubCheckIn as $pci)
                                            <tr>
                                                <td>{{$pci['checkInID']}}</td>
                                                <td>{{$pci['checkInEmail']}}</td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>

                                    <div class="name"><h2>Worker Checked In user</h2></div>
                                    <table class="table table-bordered table-responsive">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Email</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($worCheckIn as $wci)
                                            <tr>
                                            <td>{{$wci['workerCheckInID']}}</td>
                                            <td>{{$wci['workerCheckInEmail']}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020. All rights reserved.</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="assets/assets/vendors/js/vendor.bundle.base.js"></script>
<script src="assets/assets/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="assets/assets/js/off-canvas.js"></script>
<script src="assets/assets/js/hoverable-collapse.js"></script>
<script src="assets/assets/js/misc.js"></script>
<script src="assets/assets/js/settings.js"></script>
<script src="assets/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="assets/assets/js/dashboard.js"></script>
<!-- End custom js for this page-->
</body>


</html>
