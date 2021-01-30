<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BAS Admin Report Check</title>
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
            <a class="navbar-brand brand-logo" href="admin"><img src="assets/assets/images/logo.svg" alt="logo"/></a>
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
                       Watch Complains of Worker
                    </h3>
                </div>
                    <div class="col-md-10">
                        <table class="table table-bordered table-responsive">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th class="text-left">Name</th><br>
                                <th class="text-left">Email</th>
                                <th class="text-left">Report Type</th>
                                <th class="text-left">Report Details</th>
                                <th class="text-left">Delete</th>
                                <th class="text-left">Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($WorkerReport as $WR)
                                <tr>
                                    <td>{{$R=$R+1}}</td>
                                    <td class="text-center">{{$WR["WorkerName"]}}</td>
                                    <td class="text-center">{{$WR["WorkerEmail"]}}</td>
                                    <td class="text-center">{{$WR["WorkerReportType"]}}</td>
                                    <td class="text-center">{{$WR["WorkerReportMsg"]}}
                                    <td><a href="{{$WR['id']}}/deleteWreport" onclick="javascript:return confirm('Are you sure you want to delete this Report?')" class="btn btn-icon btn-danger"><i
                                                class="far fa-trash-alt"></i></a></td>
                                    <td><button onclick="sethdnId(this)" data-id="{{ $WR['id'] }}" type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#wexampleModal">
                                            Feedback
                                        </button></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><br><br><br><br>


                <div class="container-fluid">
                    <h3 class="page-title">
                        Watch Complains of Public
                    </h3>
                </div>
                <div class="col-md-10">
                    <table class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th class="text-left">Name</th><br>
                            <th class="text-left">Email</th>
                            <th class="text-left">Report Type</th>
                            <th class="text-left">Report Details</th>
                            <th class="text-left">Delete</th>
                            <th class="text-left">Feedback</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($PublicReport as $PR)
                            <tr>
                                <td>{{$P=$P+1}}</td>
                                <td class="text-center">{{$PR["publicName"]}}</td>
                                <td class="text-center">{{$PR["publicEmail"]}}</td>
                                <td class="text-center">{{$PR["publicReportType"]}}</td>
                                <td class="text-center">{{$PR["publicReportMsg"]}}</td>
                                <td><a href="{{$PR['id']}}/deletePreport" onclick="javascript:return confirm('Are you sure you want to delete this Report?')" class="btn btn-icon btn-danger"><i
                                            class="far fa-trash-alt"></i></a></td>
                                <td><button onclick="sethdnId(this)" data-id="{{ $PR['id'] }}" type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal">
                                        Feedback
                                    </button></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Public Feedback</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="/GiveFeedback" method="post">
                    @csrf
                    <input type="hidden" value="" name="hdn_id" id="hdn_id">

                    <div class="modal-body">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Feedback</label>
                            <input type="text" name="feedBackReport" id="name" class="form-control"/>
                        </div>

                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>


            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="wexampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Worker Feedback</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="/giveFeedback2" method="post">
                    @csrf
                    <input type="hidden" value="" name="hdn_id" id="hdn_id">

                    <div class="modal-body">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Feedback</label>
                            <input type="text" name="workerReportFeedback" id="name" class="form-control"/>
                        </div>

                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>

            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
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
<!-- End custom js for this page-->
</body>


</html>
