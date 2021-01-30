<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="construction is awesome bootstrap responsive construction business theme">
    <meta name="keywords" content="construction, business, construction business, responsive, parallax, business theme">
    <title>Construction</title>

    <!-- Bootstrap -->
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:300,500" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/Pe-icon-7-stroke.css" rel="stylesheet">
    <link href="../assets/css/owl.carousel.css" rel="stylesheet">
    <link href="../assets/css/owl.theme.css" rel="stylesheet">
    <link href="../assets/css/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/html5shiv.min.js"></script>
    <script src="assets/plugins/respond.min.js"></script>
    <![endif]-->
</head>
<body id="home" class="home">

<!-- begin:header -->
<div class="header" data-parallax="scroll" data-image-src="assets/img/img-work-03.jpg">
    <!-- begin:topbar -->
    <div id="topbar" class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                </div><!-- .col-sm-8 -->
                <div class="col-sm-4 hidden-xs">
                    <div class="nav-utility nav-right">
                        <a href="#" class="nav-item"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="nav-item"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="nav-item"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="nav-item"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="nav-item"><i class="fa fa-envelope-o"></i></a>
                    </div><!-- .nav-utility -->
                </div><!-- .col-sm-4 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .topbar -->
    <!-- end:topbar -->

    <!-- begin:site-navigation -->
    <div class="site-header-affix-wrapper">
        <header id="masthead" class="site-header" role="banner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="site-branding">
                            <h1 class="site-title title-image"><a href="index.html" rel="home"><img src="../assets/img/img-logo.png" alt="construction business" class="img-responsive"></a></h1>
                        </div><!-- .site-branding -->
                    </div><!-- .col-sm-3 -->

                    <div class="col-sm-9">
                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <button class="menu-toggle" type="button" aria-controls="primary-menu" aria-expanded="false"><span class="pe-7s-menu"></span><span class="sr-only">Primary Menu</span></button>

                            <div class="menu-testing-menu-container">
                                <ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
                                    <li class="menu-item current-menu-item"><a href="/public">Home</a></li>
                                    <li class="menu-item" aria-haspopup="true"><a href="Publicshop">shop/office Details</a>

                                    </li>
                                    <li class="menu-item menu-item-has-children" aria-haspopup="true"><a href="#">Permission</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="askpermission">Ask For permission</a></li>
                                            <li class="menu-item"><a href="takepermission">Take Permission</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children" aria-haspopup="true"><a href="#">Complain</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="PublicReport">Report</a></li>
                                            <li class="menu-item"><a href="PublicFeedback">Feedback</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="{{ route('logout') }}"
                                                             onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log out</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        </nav><!-- #site-navigation -->
                    </div><!-- .col-sm-9 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </header><!-- #masthead -->
    </div><!-- .site-header-affix-wrapper -->
    <!-- end:site-navigation -->

    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-7">
                <div class="header-caption">
                    <span class="caption-subtitle">Safety Assurence</span>
                    <h2 class="caption-title">For the safety of the building and yours please Check in while you enter.</h2>
                    <p>While you are about go out form the building make sure you checked out.</p>
                    <div class="header-action-button">
                        <form action="/PublicCheckIn" method="post">
                            @csrf
                            <button type="submit" name="publicCheckIn" class="btn btn-default btn-bordered  btn-md" href="#">Check In</button>
                        </form>
                    </div>
                    <div class="header-action-button">
                        <form action="/PublicCheckOut" method="post">
                            @csrf
                            <button type="submit" name="publicCheckOut" class="btn btn-default btn-bordered  btn-md" href="#">Check out</button>
                        </form>
                    </div><!-- header-action-button -->
                </div><!-- .header-caption -->
            </div><!-- .col-sm-5 -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- #header -->
<!-- end:header -->

<!-- begin:additional-info -->

    <div class="container">
        @include('footer');
    </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../assets/plugins/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/plugins/parallax.min.js"></script>
<script src="../assets/js/navigation.js"></script>
<script src="../assets/plugins/jquery.easing.js"></script>
<script src="../assets/plugins/jquery.magnific-popup.min.js"></script>
<script src="../assets/plugins/imagesloaded.pkgd.min.js"></script>
<script src="../assets/plugins/isotope.pkgd.min.js"></script>
<script src="../assets/plugins/owl.carousel.min.js"></script>
<script src="../assets/js/script.min.js"></script>
</body>

</html>
