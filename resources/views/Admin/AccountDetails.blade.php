<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BAS Admin Create Account</title>
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
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/css/emp.main.css" rel="stylesheet" media="all">
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
                <div class="page-header">
                    <h3 class="page-title">
                        Account details of Employee
                    </h3>
                </div>
                            <div class="table-responsive">
                                <table class="table table-responsive table-bordered">
                                    <thead>
                                    <td>Username</td>
                                    <td>Email</td>
                                    <td>Password</td>
                                    <td>Address</td>
                                    <td>Phone Number</td>
                                    <td>Action</td>
                                    </thead>
                                    <tbody>
                                    @foreach($Acc as $acc)
                                        <tr>
                                            <th>{{$acc['EName']}}</th>
                                            <th>{{$acc['Eemail']}}</th>
                                            <th>{{$acc['Epass']}}</th>
                                            <th>{{$acc['Eaddress']}}</th>
                                            <th>{{$acc['EPhoneNo']}}</th>
                                            <td><a href="{{$acc['id']}}/deleteAccount" onclick="javascript:return confirm('Are you sure you want to delete this account?')" class="btn btn-icon btn-danger"><i
                                                        class="far fa-trash-alt"></i></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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


<script src="assets/vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="assets/vendor/select2/select2.min.js"></script>
<script src="assets/vendor/datepicker/moment.min.js"></script>
<script src="assets/vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="assets/js/emp.global.js"></script>
<!-- End custom js for this page-->
</body>


</html>
