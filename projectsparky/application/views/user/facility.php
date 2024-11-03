<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Facility - Sparky Hotel</title>
    <!-- Icon -->
    <link rel="icon" href="<?= base_url() ?>assets/images/logomini.png">
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="<?= base_url('assets/css/core.css'); ?>">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="<?= base_url('assets/css/shortcode/shortcodes.css'); ?>">
    <!-- Theme main style -->
    <link rel="stylesheet" href="<?= base_url('assets/style.css'); ?>">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css'); ?>">
    <!-- customizer style css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style-customizer.css'); ?>">
    <!-- Ajax -->
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css"
        rel="stylesheet" type="text/css" />

    <style type="text/css">
    .service-item {
        height: 320px;
        padding: 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        background: #FFFFFF;
        box-shadow: 0 0 45px rgba(0, 0, 0, .08);
        transition: .5s;
    }

    .service-item:hover {
        background: #3ac4fa;
        transform: translateY(-10px);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    .service-item .service-icon {
        margin: 0 auto 30px auto;
        width: 150px;
        height: 65px;
        transition: .5s;
    }

    .service-item i,
    .service-item h5,
    .service-item p {
        transition: .5s;
    }

    .service-item:hover i,
    .service-item:hover h5,
    .service-item:hover p {
        color: #FFFFFF !important;
    }
    </style>

</head>

<body>
    <div class="wrapper">
        <!-- Header Section Start -->
        <header>
            <div class="header-section">
                <?= include('header.php'); ?>
            </div>
        </header>
        <!-- Header Section End-->

        <!-- Search Bar Start -->
        <div class="search-bar animated slideOutUp">
            <div class="table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <div class="search-form-wrap">
                                    <button class="close-search"><i class="mdi mdi-close"></i></button>
                                    <form action="#">
                                        <input type="text" placeholder="Search here..." value="Search here..." />
                                        <button class="search-button" type="submit">
                                            <i class="mdi mdi-magnify"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- search Bar End -->

        <!-- Facilities Section Start -->
        <div class="contact ptb-80 white_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center wow fadeInUp mb-80" data-wow-delay="0.1s">
                            <h2>Our <span>Facilities</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-hotel text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Rooms & Suites</h5>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                                lorem
                                sed diam stet diam sed stet lorem.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-food text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Food & Buffet</h5>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                                lorem
                                sed diam stet diam sed stet lorem.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-dumbbell text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Spa & Fitness</h5>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                                lorem
                                sed diam stet diam sed stet lorem.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-checkerboard text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Sports & Gaming</h5>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                                lorem
                                sed diam stet diam sed stet lorem.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-glass-cocktail text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Pool, Party, & Bar</h5>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                                lorem
                                sed diam stet diam sed stet lorem.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-dumbbell text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Working Space</h5>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                                lorem
                                sed diam stet diam sed stet lorem.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- Facilities Section End -->

    <!-- Footer Section Start -->
    <footer>
        <?= include('footer.php'); ?>
    </footer>
    <!-- Footer Section End -->


    </div>

    <!-- Placed js at the End of the document so the pages load faster -->

    <!-- JavaScript -->
    <!-- Modernizr JS -->
    <script src="<?= base_url('assets/js/vendor/modernizr-2.8.3.min.js'); ?>"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.1/js/bootstrap-dialog.min.js">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <!-- jquery latest version -->
    <script src="<?= base_url('assets/js/vendor/jquery-1.12.0.min.js'); ?>"></script>
    <!-- Bootstrap framework js -->
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!--counter up js-->
    <script src="<?= base_url('assets/js/waypoints.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.counterup.min.js'); ?>"></script>
    <!-- Video player js -->
    <script src="<?= base_url('assets/js/video-player.js'); ?>"></script>
    <!-- headlines js -->
    <script src="<?= base_url('assets/js/animated-headlines.js'); ?>"></script>
    <!-- Ajax mail js -->
    <script src="<?= base_url('assets/js/mailchimp.js'); ?>"></script>
    <!-- Ajax mail js -->
    <script src="<?= base_url('assets/js/ajax-mail.js'); ?>"></script>
    <!-- parallax js -->
    <script src="<?= base_url('assets/js/parallax.js'); ?>"></script>
    <!-- textilate js -->
    <script src="<?= base_url('assets/js/textilate.js'); ?>"></script>
    <script src="<?= base_url('assets/js/lettering.js'); ?>"></script>
    <!--isotope js-->
    <script src="<?= base_url('assets/js/isotope.pkgd.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/packery-mode.pkgd.min.js'); ?>"></script>
    <!-- Style Customizer Js  -->
    <script src="<?= base_url('assets/js/style-customizer.js'); ?>"></script>
    <!-- Owl carousel Js -->
    <script src="<?= base_url('assets/js/owl.carousel.min.js'); ?>"></script>
    <!--Magnificant js-->
    <script src="<?= base_url('assets/js/jquery.magnific-popup.js'); ?>"></script>
    <!-- All js plugins included in this file. -->
    <script src="<?= base_url('assets/js/plugins.js'); ?>"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="<?= base_url('assets/js/main.js'); ?>"></script>

</body>

</html>