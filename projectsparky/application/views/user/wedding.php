<!DOCTYPE html>
<html>

<head>
    <title>Wedding - Sparky Hotel</title>

    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>

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

    <!-- Page content -->
    <div class="w3-content" style="max-width:1100px">

        <!-- About Section -->
        <div class="w3-row w3-padding-64" id="about">
            <div class="w3-col m6 w3-padding-large w3-hide-small">
                <img src="<?= base_url() ?>/assets/images/wedding1.jpg" class="w3-round w3-image w3-opacity-min"
                    alt="Table Setting" width="600" height="750">
            </div>

            <div class="w3-col m6 w3-padding-large">
                <h1 class="w3-center">About Wedding</h1><br>
                <h5 class="w3-center">Modern Wedding</h5>
                <p class="w3-large">Modern wedding refers to the trends and styles that tend to blend traditional and
                    contemporary elements in the celebration of marriage. It involves a more free-spirited and
                    individualistic approach to wedding planning, allowing couples to uniquely express their
                    personalities and styles. In a modern wedding, rigid conventions and rules are broken, providing
                    freedom for couples to choose unconventional wedding venues, creative decorations, and themes
                    different from traditional weddings.
                </p>
                <p class="w3-large w3-text-grey w3-hide-medium">Additionally, modern weddings often involve the use of
                    technology, ranging from digital invitations to live streaming, which allows absent relatives and
                    friends to still be engaged in the celebration.</p>
            </div>
        </div>

        <hr>


        <!-- Menu Section -->
        <div class="w3-row w3-padding-64" id="menu">
            <div class="w3-col l6 w3-padding-large">
                <h1 class="w3-center">Our Facilities</h1><br>
                <h4>Event Space</h4>
                <p class="w3-text-grey">The room you book will typically include a dedicated event space suitable for
                    hosting wedding ceremonies and receptions. </p><br>

                <h4>Audio-Visual Equipment</h4>
                <p class="w3-text-grey">Depending on the venue, you may have access to audio-visual equipment such as
                    microphones, speakers, projectors, and screens.</p><br>

                <h4>Catering Services</h4>
                <p class="w3-text-grey">Many wedding room bookings come with catering services or the option to hire a
                    catering team. </p><br>

                <h4>Bridal Suite</h4>
                <p class="w3-text-grey">In addition to the event space, some venues offer a dedicated bridal suite or
                    dressing room. </p><br>

                <h4>Decor and Styling</h4>
                <p class="w3-text-grey">Some wedding room bookings may include access to professional decorators or
                    stylists who can assist with creating a visually appealing and personalized atmosphere for your
                    wedding. </p>
            </div>

            <div class="w3-col l6 w3-padding-large">
                <img src="<?= base_url() ?>/assets/images/wedding2.jpg" class="w3-round w3-image w3-opacity-min"
                    alt="Menu" style="width:100%">
            </div>
        </div>

        <hr>

        <!-- Contact Section -->
        <div class="w3-container w3-padding-64" id="contact">
            <h1>Contact Us</h1><br>
            <p>We value your feedback and are here to assist you. Please feel free to get in touch with us using the
                following contact information:.</p>
            <p class="w3-text-blue-grey w3-large"><b>Sparky Hotel, 42 Legok Street, 43043 Tangerang</b></p>
            <p>You can also contact us by phone 081345697080 or email sparkyhotel.com, or you can send us a
                message here:</p>
            <form action="<?= site_url('Auth/do_contact') ?>">
                <p><input class="w3-input w3-padding-16" type="email" placeholder="Email" required name="Name"></p>
                <p><input class="w3-input w3-padding-16" type="phone" placeholder="Phone Number" required name="phone">
                </p>
                <p><input class="w3-input w3-padding-16" type="datetime-local" placeholder="Date and time" required
                        name="date" value="22023-06-15T20:00"></p>
                <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
                <p>Our dedicated team is ready to answer any questions, address any concerns, or provide further
                    information. We strive to provide excellent customer service and ensure your satisfaction.</p>
                <p><button class="w3-button w3-light-grey w3-section" type="submit" onclick="return alert('Done')">SEND
                        MESSAGE</button></p>
            </form>
        </div>

        <!-- End page content -->
    </div>

    <!-- Footer Section Start -->
    <footer>
        <?= include('footer.php'); ?>
    </footer>
    <!-- Footer Section End -->

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