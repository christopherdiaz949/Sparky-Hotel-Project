<?php
if (!$this->session->userdata('checkin_date')) {
    $this->session->set_userdata('checkin_date', "");
}
if (!$this->session->userdata('checkout_date')) {
    $this->session->set_userdata('checkout_date', "");
}
if (!$this->session->userdata('jenis')) {
    $this->session->set_userdata('jenis', "");
}
if (!$this->session->userdata('amount')) {
    $this->session->set_userdata('amount', "");
}
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Sparky Hotel Website">
    <meta name="keywords" content="hotel, reservation, booking, modern">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage - Sparky Hotel</title>
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

</head>

<body>
    <div class="preloader">
        <div class="loading-center">
            <div class="loading-center-absolute">
                <div class="object object_one"></div>
                <div class="object object_two"></div>
                <div class="object object_three"></div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <!--Header section Start-->
        <header>
            <div class="header-section">
                <?= include('header.php'); ?>
                <!-- Quick Menu Sectton Start-->
                <div class="welcome-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-5">
                                <div class="booking-box">
                                    <div class="booking-title">
                                        <h3>Book Your Stay</h3>
                                    </div>
                                    <div class="booking-form">
                                        <form action="<?= base_url('Auth/booking/') ?>" method="POST" id="bookingForm">
                                            <div class="b-date">
                                                <input type="text" id="checkin_date" name="checkin_date"
                                                    value="<?= $this->session->userdata('checkin_date') ?>" required>
                                                <i class="mdi mdi-calendar-text"></i>
                                                <br><br>
                                            </div>
                                            <div class="b-date">
                                                <input type="text" id="checkout_date" name="checkout_date"
                                                    value="<?= $this->session->userdata('checkout_date') ?>" required>
                                                <i class="mdi mdi-calendar-text"></i>
                                                <br>
                                            </div>
                                            <div class="select-book">
                                                <select name="amount">
                                                    <option selected>Adult</option>
                                                    <option value="1"
                                                        <?= ($this->session->userdata('amount') == '1') ? "selected" : "" ?>>
                                                        1</option>
                                                    <option value="2"
                                                        <?= ($this->session->userdata('amount') == '2') ? "selected" : "" ?>>
                                                        2</option>
                                                </select>
                                                <br>
                                            </div>
                                            <div class="select-book">
                                                <select name="jenis" id="roomType">
                                                    <option selected>Choose Room Type</option>
                                                    <?php foreach ($kamar as $kmr): ?>
                                                    <option value="<?= $kmr->id ?>"
                                                        <?= ($this->session->userdata('jenis') == $kmr->jenis) ? "selected" : "" ?>>
                                                        <?= $kmr->jenis ?>
                                                    </option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <br><br>
                                            </div>
                                            <div class="submit-form">
                                                <button type="submit">Book Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-7">
                                <div class="welcome-text">
                                    <p class="wow fadeInUp" data-wow-delay="0.1s" style="color: #fff; font-size: 18px;">
                                        Hello,<b style="color: #fff; font-size: 16px; font-weight: bold;">
                                            <?= $this->session->userdata('nama'); ?></b></p>
                                    <h2>
                                        <span>WELCOME TO</span> <span class="coloring">SPARKY HOTEL</span>
                                    </h2>
                                    <h1 class="cd-headline clip">
                                        <span>THE PERFECT</span>
                                        <span class="cd-words-wrapper coloring">
                                            <b class="is-visible">ROOM</b>
                                            <b>LOCATION</b>
                                            <b>MOMENT</b>
                                        </span>
                                    </h1>
                                    <p class="welcome-desc">
                                        Experience refined elegance and impeccable service at Sparky Hotel. Nestled in a
                                        vibrant city, our sanctuary of sophistication offers an unparalleled stay. From
                                        the
                                        moment you arrive, be captivated by timeless beauty, luxurious ambiance, and
                                        personalized attention. We strive to exceed expectations and create
                                        unforgettable
                                        memories.
                                    </p>
                                    <div class="explore">
                                        <a href="<?= site_url('Welcome/facility') ?>">MORE INFORMATION</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Quick Menu Sectton End -->
        </header>
        <!-- Header Section End -->
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
        <!--About Us Start-->
        <div class="about-section text-center ptb-80 white_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title wow fadeInUp mb-80" data-wow-delay="0.1s">
                            <h2>About <span>Us</span></h2>
                            <p>Sparky Hotel is a one-of-a-kind destination that stands out among the rest. Located in
                                the heart of a vibrant city, we offer a unique and affordable experience for our guests.
                                Our modern and eye-catching architecture sets us apart, making Sparky Hotel a
                                sought-after venue for weddings and special occasions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--About Us End-->
        <!--Rooms & Suites Start-->
        <div class="our-room text-center ptb-80 white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title wow fadeInUp mb-80" data-wow-delay="0.1s">
                            <h2>Rooms & <span>Suites</span></h2>
                            <p>Immerse yourself in our meticulously designed rooms and suites, each thoughtfully crafted
                                to provide the utmost comfort and elegance. Every detail has been carefully considered
                                to create a harmonious blend of contemporary style and timeless sophistication. Indulge
                                in the plush bedding, relax in the opulent surroundings, and revel in the modern
                                amenities that cater to your every need.</p>
                        </div>
                    </div>
                </div>
                <div class="our-room-show">
                    <div class="row">
                        <div class="carousel-list">
                            <?php $delay = 0.1; ?>
                            <?php foreach ($kamar as $kmr) { ?>
                            <div class="col-md-4 wow fadeInUp" data-wow-delay="<?= $delay ?>s">
                                <div class="single-room">
                                    <div class="room-img">
                                        <img src="<?= base_url() ?>/images/kamar/<?= $kmr->gambar ?>" alt="">
                                    </div>
                                    <div class="room-desc">
                                        <div class="room-name">
                                            <h3>
                                                <?= $kmr->jenis ?>
                                            </h3>
                                        </div>
                                        <div class="room-rent">
                                            <h6>Rp
                                                <?= $kmr->harga ?> / <label>Night</label>
                                            </h6>
                                        </div>
                                        <div class="room-book">
                                            <a href="<?= site_url('Auth/booking/' . $kmr->id) ?>">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $delay += 0.2;?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Rooms & Suites End-->
        <!--Footer Section Start -->
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
    <script language="javascript">
    $(document).ready(function() {
        $("#checkin_date").datepicker({
            maxDate: 0,
            dateFormat: "dd-M-yy",
            onSelect: function(date) {
                var in_date = $('#checkin_date').datepicker('getDate');
                in_date.setDate(in_date.getDate());
                $('#checkout_date').datepicker('setDate', in_date);
                // sets minDate to check-in date + 1
                var minCheckoutDate = new Date(in_date);
                minCheckoutDate.setDate(minCheckoutDate.getDate() + 1);
                $('#checkout_date').datepicker('option', 'minDate', minCheckoutDate);
            }
        });

        $('#checkout_date').datepicker({
            maxDate: 0,
            dateFormat: "dd-M-yy",
            onClose: function() {
                var out_date = $('#checkin_date').datepicker('getDate');
                var in_date = $('#checkout_date').datepicker('getDate');
                if (in_date <= out_date) {
                    var minDate = new Date(out_date);
                    minDate.setDate(minDate.getDate() + 1);
                    $('#checkout_date').datepicker('setDate', minDate);
                }
            }
        });
    });

    const roomType = document.getElementById('roomType');
    const bookingForm = document.getElementById('bookingForm');

    roomType.addEventListener('change', function() {
        const selectedRoomId = roomType.value;
        bookingForm.action = '<?= site_url('Auth/booking/') ?>' + selectedRoomId;
    });

    document.addEventListener('DOMContentLoaded', function() {
        const checkinDateInput = document.getElementById('checkin_date');
        const checkoutDateInput = document.getElementById('checkout_date');

        const defaultCheckinDate = 'Arrive Date';
        const defaultCheckoutDate = 'Departure Date';

        checkinDateInput.value = defaultCheckinDate;
        checkoutDateInput.value = defaultCheckoutDate;

        checkinDateInput.addEventListener('focus', function() {
            if (checkinDateInput.value === defaultCheckinDate) {
                checkinDateInput.value = '';
            }
        });

        checkoutDateInput.addEventListener('focus', function() {
            if (checkoutDateInput.value === defaultCheckoutDate) {
                checkoutDateInput.value = '';
            }
        });
    });
    </script>

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