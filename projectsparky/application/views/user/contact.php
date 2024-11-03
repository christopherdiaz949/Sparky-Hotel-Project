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
    /*-- Contact Us Form CSS --*/
    p i {
        margin-right: 0.5rem;
    }

    .form-field-name input,
    .form-field-name .textarea textarea {
        margin-bottom: 15px;
    }

    .form-field-name .textarea textarea {
        margin-bottom: 15px;
    }

    .google-map-area {
        margin-bottom: 40px;
        display: flex;
        justify-content: center;
    }

    .map-container {
        position: relative;
        overflow: hidden;
        padding-bottom: 75%;
        height: 0;
    }

    .map-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    /*-- Modal CSS --*/
    .modal {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fff;
        margin: 10% auto;
        padding: 20px;
        border: 1px solid #ccc;
        max-width: 400px;
        text-align: center;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
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

        <!-- Contact Start -->
        <div class="contact ptb-80 white_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center wow fadeInUp mb-80" data-wow-delay="0.1s">
                            <h2><span>Contact</span> For Any Query</h2>
                            <div class="row" style="margin: 40px 20px;">
                                <div class="col-md-4">
                                    <h6 class="section-title text-primary text-uppercase">General</h6>
                                    <p><i class="mdi mdi-email-open-outline"></i>info@sparky.id</p>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="section-title text-primary text-uppercase">Location</h6>
                                    <p><i class="mdi mdi-map-marker"></i>88 Legok Street, 15810 Tangerang,
                                        Indonesia</p>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="section-title text-primary text-uppercase">Telephone</h6>
                                    <p><i class="mdi mdi-phone"></i>+62 857 7996 7703 (WA)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="map-container">
                            <iframe class="google-map-area"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.140093421429!2d106.60802327468322!3d-6.24526219374308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fc6b453e2c45%3A0xab80ebd063122f65!2sLemo%20Hotel%20Serpong!5e0!3m2!1sen!2sid!4v1686417169742!5m2!1sen!2sid"
                                width="525" height="375" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade" aria-hidden="false"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-form wow fadeInUp" data-wow-delay="0.2s">
                            <form class="contact-form" action="<?= site_url('Auth/do_contact') ?>" method="POST">
                                <div class="row">
                                    <div class="form-field-name">
                                        <input type="text" id="name" placeholder="Your Name">
                                    </div>
                                    <div class="form-field-name">
                                        <input type="email" id="email" placeholder="Your Email">
                                    </div>
                                    <div class="form-field-name">
                                        <input type="text" id="subject" placeholder="Subject">
                                    </div>
                                    <div class="form-field-name">
                                        <div class="textarea">
                                            <textarea class="form-control" placeholder="Leave a message here!"
                                                id="message" style="height: 175px"></textarea>
                                        </div>
                                    </div>
                                    <div class="submit">
                                        <button type="submit"
                                            onclick="return alert('We sincerely apologize for any inconvenience you may have encountered. We appreciate your feedback and will address your concerns as soon as possible. Thank you for reaching out to us.')">Send
                                            Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.1/js/bootstrap-dialog.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <!-- jquery latest version -->
    <script src="<?= base_url('assets/js/vendor/jquery-1.12.0.min.js'); ?>"></script>
    <!-- Bootstrap framework js -->
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!-- WOW and Easing js-->
    <script src="<?= base_url('assets/js/wow.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/easing.min.js'); ?>"></script>
    <!-- counter up js-->
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