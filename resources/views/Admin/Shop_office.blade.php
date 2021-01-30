<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BAS Admin Shop/Office Details</title>
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

{{--    //form links--}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="assets/ASO/css/main.css" rel="stylesheet" media="all">


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

            <div class="wrapper wrapper--w680">
                <div class="card card-5">
                    <div class="header-caption pull-right">
                        <h2 class="header">Insert New Shop or Office Details</h2>
                    </div>

                    <div class="card-body">
                    <form action="/SubmitShopOfficeAdmin" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="name">Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="ShopName">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Please Select one</div>
                            <div class="value">
                                <div class="input-group col-md-6">
                                    <div class="rs-select2 js-select-simple select--no-search col-md-6">
                                        <select name="SOType" >
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Shop</option>
                                            <option>Office</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="number" name="ShopNo" placeholder="Number">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Details</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="ShopDetails" placeholder="Details">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Picture</div>
                            <div class="value">
                                    <input type="file" name="ShopPhoto" placeholder="Select a photo">
                                <div class="label--desc">Upload Picture of the selected Shop/Office or any other relevant file. Max file size 50 MB</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <button class="btn btn--radius-2 btn--blue-2" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
        <br>

    <div class="card-body" style="color: #16a085;" >
                    <h2 class="page-title" >
                        Inserted Shops or Offices
                    </h2>
                    <table class="table table-responsive table-bordered">
                        <thead>
                        <tr>
                            <th class="text-left">Name</th>
                            <th class="text-left">Type</th>
                            <th class="text-left">Shop Number</th>
                            <th class="text-left">Details</th>
                            <th class="text-left">Photo</th>
                            <th class="text-left">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($SO as $s)
                        <tr>
                            <td class="text-center">{{$s['ShopName']}}</td>
                            <td class="text-center">{{$s['ShopType']}}</td>
                            <td class="text-center">{{$s['ShopNo']}}</td>
                            <td class="text-center">{{$s['ShopDetails']}}</td>
                            <td><img src="Uploads/SOpicture/{{$s['ShopPhoto']}}" width="100" height="100" alt="No Image Given"> </td>
                            <td><a href="{{$s['id']}}/deleteSOdetails" onclick="javascript:return confirm('Are you sure you want to delete this details?')" class="btn btn-icon btn-danger"><i
                                        class="far fa-trash-alt"></i></a><br><button onclick="sethdnId(this)" data-id="{{ $s['id'] }}" type="button" class="btn btn-primary" data-toggle="modal"
                                                                                     data-target="#exampleModal">
                                    Edit
                                </button></td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
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
        <!-- main-panel ends -->
    <!-- page-body-wrapper ends -->
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="/editShopDetails" method="post">
                    @csrf
                    <input type="hidden" value="" name="hdn_id" id="hdn_id">
                        <div class="form-row">
                            <div class="name">Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="ShopName">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Select a Type</div>
                                <select name="SOType" >
                                    <option disabled="disabled" selected="selected">Choose type</option>
                                    <option>Shop</option>
                                    <option>Office</option>
                                </select>
                                <div class="select-dropdown"></div>
                    </div>
                        <div class="form-row">
                            <div class="name">Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="number" name="ShopNo" placeholder="Number">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Details</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="ShopDetails" placeholder="Details">
                                </div>
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

{{--//custom form--}}
<script src="assets/ASO/vendor/jquery/jquery.min.js"></script>


<!-- Main JS-->
<script src="assets/ASO/js/global.js"></script>


<!-- End custom js for this page-->
</body>


</html>
