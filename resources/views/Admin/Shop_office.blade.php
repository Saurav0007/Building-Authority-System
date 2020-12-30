<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Melody Admin</title>
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
                       Please insert new shop offices in the building
                    </h3>
                </div>
                <div class="container-fluid">
                    <form action="/SubmitShopOfficeAdmin" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-md-10">
                            <input type="text" class="form-control" name="ShopName" placeholder="Shop Name">
                        </div>

                        <div class="form-group col-md-10">
                        <label for="exampleFormControlSelect1"> Please Select one</label>
                        <select name="SOType" id="SOType" class="form-control">
                        <option>Shop</option>
                        <option>Office</option>
                        </select>
                        </div>

                        <div class="form-group col-md-10">
                            <input type="number" class="form-control" name="ShopNo" placeholder="Shop Number">
                        </div>
                        <div class="form-group col-md-10">
                            <input type="text" class="form-control" name="ShopDetails" placeholder="Details">
                        </div>
                        <div class="form-group col-md-10">
                            <input type="file" class="form-control" name="ShopPhoto" placeholder="Photo">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div><br>
                <div class="page-title-icon" style="color: #16a085;" >
                    <h3 class="page-title" >
                        Inserted Shops or Offices
                    </h3>
                    <div class="col-md-10">
                    <table>
                        <thead>
                        <tr>
                            <th class="text-left">Name</th>
                            <th class="text-left">Type</th>
                            <th class="text-left">Number</th>
                            <th class="text-left">Details</th>
                            <th class="text-left">Photo</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($SO as $s)
                        <tr>
                            <th class="text-center">{{$s['ShopName']}}</th>
                            <th class="text-center">{{$s['ShopType']}}</th>
                            <th class="text-center">{{$s['ShopNo']}}</th>
                            <th class="text-center">{{$s['ShopDetails']}}</th>
                            <th><img src="Uploads/SOpicture/{{$s['ShopPhoto']}}" width="100" height="100" alt="No Image Given"> </th>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
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
