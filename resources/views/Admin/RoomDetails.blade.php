<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BAS Admin Room Details</title>
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
                    <h2 class="page-title">
                      Check Room Details
                        <br><br><br><br><div class="table-responsive">
                            <table class="table table-responsive table-bordered">
                                <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Room Number</th>
                                <th>Problem Details</th>
                                <th>Checked</th>
                                </thead>
                                <tbody>
                                @foreach($RDA as $rda)
                                    <tr>
                                        <td>{{$r=$r+1}}</td>
                                        <td>{{$rda['name']}}</td>
                                        <td>{{$rda['RoomNo']}}</td>
                                        <td>{{$rda['RoomDetails']}}</td>
                                        <td>{{$rda['check']}}</td>
                                        <td><a href="{{$rda['id']}}/deleteRoomDetails" onclick="javascript:return confirm('Are you sure you want to delete this room details?')" class="btn btn-icon btn-danger"><i
                                                    class="far fa-trash-alt"></i></a><br> <button onclick="sethdnId(this)" data-id="{{ $rda['id'] }}" type="button" class="btn btn-primary" data-toggle="modal"
                                                                                                  data-target="#exampleModal">
                                                Edit
                                            </button></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </h2>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">update Room Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="/editEmptyRoomDetails" method="post">
                    @csrf
                    <input type="hidden" value="" name="hdn_id" id="hdn_id">

                    <div class="modal-body">
                        <!-- Checkbox -->
                        <div class="form-group col-md-6">
                            <label class="form-check-label" for="check">
                                Problem Fixed or Not
                            </label>
                            <select name="check" class="form-control">
                                <option>Fixed</option>
                                <option>Not Fixed</option>
                            </select>
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
<!-- container-scroller -->
<script type="text/javascript">
    function sethdnId(element){
        var data_id= $(element).attr("data-id");
        $("#hdn_id").val(data_id);
    }
</script>
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
