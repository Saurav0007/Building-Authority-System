<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="construction is awesome bootstrap responsive construction business theme">
    <meta name="keywords" content="construction, business, construction business, responsive, parallax, business theme">
    <meta name="author" content="templateninja">
    <title>Employee</title>

    <!-- Bootstrap -->
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:300,500" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/Pe-icon-7-stroke.css" rel="stylesheet">
    <link href="../assets/css/owl.carousel.css" rel="stylesheet">
    <link href="../assets/css/owl.theme.css" rel="stylesheet">
    <link href="../assets/css/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/html5shiv.min.js"></script>
    <script src="assets/plugins/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="home" class="home">

    <!-- begin:header -->
    <div class="header" data-parallax="scroll" data-image-src="assets/img/img-header.jpg">
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
                                        <li class="menu-item current-menu-item"><a href="Employee">Home</a></li>
                                        <li class="menu-item menu-item-has-children" aria-haspopup="true"><a href="#">Create Account</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-has-children"><a href="worker_details">Worker</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="worker_regi">Registration</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children" aria-haspopup="true"><a href="public_details">Public</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="public_regi">Registration</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children" aria-haspopup="true"><a href="permission_details">Permissions</a>
                                            <ul class="sub-menu">
                                                <li class="sub-menu" aria-haspopup="true"><a href="permission_list">Permission Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children" aria-haspopup="true"><a href="EmployeeRoomDetails">Room Details</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item" aria-haspopup="true"><a href="EmptyRoomDetails">Empty Rooms</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="shop_office">Shop/Office Details</a></li>
                                        <li class="menu-item"><a href="#">Log out</a></li>
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
                <div class="col-sm-10">
                    <div class="header-caption">
                        <h2 class="Header-caption">Public Account Details</h2><div class="status alert alert-success" style="display: none"></div>
                        <form action="#" class="row"  method="post">
                            @csrf

                            <table class="table table-bordered table-dark">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone NO</th>
                                        <th>Address</th>
                                        <th>Password</th>
                                    </tr>
                                    </thead>
                                <tbody>
                                @foreach($PD as $pd)
                                    <tr>
                                        <td>{{$pd['PublicName']}}</td>
                                        <td>{{$pd['PublicEmail']}}</td>
                                        <td>{{$pd['PublicPhone']}}</td>
                                        <td>{{$pd['PublicAddress']}}</td>
                                        <td>{{$pd['PublicPassword']}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- #header -->
    <!-- end:header -->
    <div class="container">
        <div class="row">
            <div class="col-sm-5">

            </div>
        </div>


        <!-- begin:additional-info -->
        <div id="additional-info" class="additional-info block-section bg-grey padd-20-top padd-40-btm">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="contact-item">
                            <div class="contact-item-icon">
                                <i class="fa fa-phone"></i>
                            </div><!-- .contact-item-icon -->
                            <h4 class="contact-item-title">Phone number:</h4>
                            <div class="contact-item-info">0-274-441-5005</div>
                        </div><!-- .contact-item -->
                    </div><!-- .col-# -->

                    <div class="col-md-3 col-sm-6">
                        <div class="contact-item">
                            <div class="contact-item-icon">
                                <i class="fa fa-envelope-o"></i>
                            </div><!-- .contact-item-icon -->
                            <h4 class="contact-item-title">Email address:</h4>
                            <div class="contact-item-info">hello@construction.me</div>
                        </div><!-- .contact-item -->
                    </div><!-- .col-# -->

                    <div class="col-md-3 col-sm-6">
                        <div class="contact-item">
                            <div class="contact-item-icon">
                                <i class="fa fa-map-marker"></i>
                            </div><!-- .contact-item-icon -->
                            <h4 class="contact-item-title">Office address:</h4>
                            <div class="contact-item-info">5252 E Walnut Ave, Orange, CA</div>
                        </div><!-- .contact-item -->
                    </div><!-- .col-# -->

                    <div class="col-md-3 col-sm-6">
                        <div class="contact-item">
                            <div class="contact-item-icon">
                                <i class="fa fa-clock-o"></i>
                            </div><!-- .contact-item-icon -->
                            <h4 class="contact-item-title">Opening times:</h4>
                            <div class="contact-item-info">Mon - Sat: 7.00 - 16:00</div>
                        </div><!-- .contact-item -->
                    </div><!-- .col-# -->
                </div><!-- .row -->
            </div><!-- container -->
        </div><!-- #additional-info -->
        <!-- end:additional-info -->

        <!-- begin:work -->
        <div id="work" class="work content-section bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>Our Works</h2>
                        </div>
                    </div><!-- .col-md-12 -->
                </div><!-- .row -->

                <div class="row">
                    <div class="col-md-12">
                        <ul class="work-filter">
                            <li class="active" data-filter="*"><a href="#">All works</a></li>
                            <li data-filter=".buildings"><a href="#buildings">Buildings</a></li>
                            <li data-filter=".interior-design"><a href="#interior-design">Interior Design</a></li>
                            <li data-filter=".isolation"><a href="#isolation">Isolation</a></li>
                            <li data-filter=".house-renovation"><a href="#house-renovation">House Renovation</a></li>
                        </ul><!-- .work-filter -->

                        <ul class="work-grid">
                            <li class="work-item buildings">
                                <a href="../assets/img/img-work-01.jpg" title="Avenue Hotels" class="image-lightbox">
                                    <div class="work-item-image">
                                        <img src="../assets/img/img-work-01.jpg" alt="Avenue Hotels">
                                    </div><!-- .work-item-image -->
                                    <div class="work-item-info">
                                        <h4 class="work-item-title">Avenue Hotels</h4>
                                        <span class="work-item-desc">Buildings</span>
                                    </div><!-- .work-item-info -->
                                </a>
                            </li><!-- .work-item -->
                            <li class="work-item interior-design">
                                <a href="../assets/img/img-work-02.jpg" title="Mark Bedroom" class="image-lightbox">
                                    <div class="work-item-image">
                                        <img src="../assets/img/img-work-02.jpg" alt="Mark Bedroom">
                                    </div><!-- .work-item-image -->
                                    <div class="work-item-info">
                                        <h4 class="work-item-title">Mark Bedroom</h4>
                                        <span class="work-item-desc">Interior Design</span>
                                    </div><!-- .work-item-info -->
                                </a>
                            </li><!-- .work-item -->
                            <li class="work-item buildings">
                                <a href="../assets/img/img-work-03.jpg" title="Edu Hostel" class="image-lightbox">
                                    <div class="work-item-image">
                                        <img src="../assets/img/img-work-03.jpg" alt="Edu Hostel">
                                    </div><!-- .work-item-image -->
                                    <div class="work-item-info">
                                        <h4 class="work-item-title">Edu Hostel</h4>
                                        <span class="work-item-desc">Buildings</span>
                                    </div><!-- .work-item-info -->
                                </a>
                            </li><!-- .work-item -->
                            <li class="work-item isolation house-renovation">
                                <a href="../assets/img/img-work-04.jpg" title="Alan Home" class="image-lightbox">
                                    <div class="work-item-image">
                                        <img src="../assets/img/img-work-04.jpg" alt="Alan Home">
                                    </div><!-- .work-item-image -->
                                    <div class="work-item-info">
                                        <h4 class="work-item-title">Alan Home</h4>
                                        <span class="work-item-desc">Isolation</span>
                                    </div><!-- .work-item-info -->
                                </a>
                            </li><!-- .work-item -->
                            <li class="work-item interior-design house-renovation">
                                <a href="../assets/img/img-work-05.jpg" title="Jannet Home" class="image-lightbox">
                                    <div class="work-item-image">
                                        <img src="../assets/img/img-work-05.jpg" alt="Jannet Home">
                                    </div><!-- .work-item-image -->
                                    <div class="work-item-info">
                                        <h4 class="work-item-title">Jannet Home</h4>
                                        <span class="work-item-desc">House Renovation</span>
                                    </div><!-- .work-item-info -->
                                </a>
                            </li><!-- .work-item -->
                            <li class="work-item design photography">
                                <a href="../assets/img/img-work-06.jpg" title="Papa Ron's Restaurant" class="image-lightbox">
                                    <div class="work-item-image">
                                        <img src="../assets/img/img-work-06.jpg" alt="Papa Ron's Restaurant">
                                    </div><!-- .work-item-image -->
                                    <div class="work-item-info">
                                        <h4 class="work-item-title">Papa Ron's Restaurant</h4>
                                        <span class="work-item-desc">Interior Design</span>
                                    </div><!-- .work-item-info -->
                                </a>
                            </li><!-- .work-item -->
                        </ul><!-- .work-grid -->
                    </div><!-- .col-md-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- #work -->
        <!-- end:work -->

        <!-- begin:about -->
        <div id="about" class="block-section image-block bg-white">
            <div class="container-fluid container-no-padding">
                <div class="row row-no-margin">
                    <div class="image-block-item col-md-6 col-sm-5 col-xs-12">
                        <div class="image-block-item-background" style="background-image: url('../assets/img/img-post-content-04.jpg');"></div>
                    </div><!-- .image-block-item -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div>
        <!-- begin:footer -->
        <footer id="colophon" class="site-footer bg-black" role="contentinfo">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <section class="widget">
                            <img src="../assets/img/img-logo-footer.png" alt="bootstrap theme for construction companies" class="img-responsive marg-20-btm marg-20-top">
                            <p>Construction company based on Orange, California. Construction was very sufficient in maintaining the integrity of project in terms of planning, scheduling, cost and quality.</p>
                        </section><!-- .widget -->
                    </div><!-- .col-## -->

                    <div class="col-md-2 col-sm-6 col-md-offset-1 col-sm-offset-0">
                        <section class="widget">
                            <h3 class="widget-title">Our Company</h3>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Selected Work</a></li>
                                <li><a href="#">Get in touch</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </section><!-- .widget -->
                    </div><!-- .col-## -->

                    <div class="col-md-3 col-sm-6">
                        <section class="widget">
                            <h3 class="widget-title">Our Services</h3>
                            <ul>
                                <li><a href="#">Metal Roofting</a></li>
                                <li><a href="#">Green Building</a></li>
                                <li><a href="#">Construction Consultant</a></li>
                                <li><a href="#">Construction Management</a></li>
                                <li><a href="#">General Contracting</a></li>
                            </ul>
                        </section><!-- .widget -->
                    </div><!-- .col-## -->

                    <div class="col-md-3 col-sm-6">
                        <section class="widget">
                            <h3 class="widget-title">Our Contact</h3>
                            <p>5252 E Walnut Ave, Orange, California, United States.</p>
                            <p>hello@construction.me<br>+62 (0) 274 441 5005</p>
                        </section>
                    </div><!-- .col-## -->
                </div><!-- .row -->
            </div><!-- .container -->
        </footer><!-- #colophon -->
        <!-- end:footer -->

        <!-- begin:copyright -->
        <section id="copyright" class="copyright bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 copy-right">
                        <ul class="social-icon">
                            <li><a href="#" target="_blank" class="icon-twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank" class="icon-facebook"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#" target="_blank" class="icon-youtube"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#" target="_blank" class="icon-instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div><!-- .col-sm-6 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </section><!-- #copyright -->
        <!-- begin:copyright -->


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
