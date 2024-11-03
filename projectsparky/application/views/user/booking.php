<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking - Sparky Hotel</title>
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

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css"
        rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script language="javascript">
    $(document).ready(function() {
        $("#checkin_date").datepicker({
            minDate: 0,
            dateFormat: "dd-M-yy",
            onSelect: function(date) {
                var in_date = $('#checkin_date').datepicker('getDate');
                in_date.setDate(in_date.getDate());
                $('#checkout_date').datepicker('setDate', in_date);
                //sets minDate to dateofbirth date + 1
                $('#checkout_date').datepicker('option', 'minDate', in_date);
            }
        });
        $('#checkout_date').datepicker({
            minDate: 0,
            dateFormat: "dd-M-yy",
            onClose: function() {
                var out_date = $('#checkin_date').datepicker('getDate');
                console.log(out_date);
                var in_date = $('#checkout_date').datepicker('getDate');
                if (in_date <= out_date) {
                    var minDate = $('#checkout_date').datepicker('option', 'minDate');
                    $('#checkout_date').datepicker('setDate', minDate);
                }
            }
        });
    });
    </script>
</head>

<body>
    <div class="wrapper">

        <div class="room-booking ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-80 text-center">
                            <h2>Booking <span>Room</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="booking-rooms-tab">
                            <ul class="nav" role="tablist">
                                <li class="active"><a href="#booking" data-toggle="tab"><span
                                            class="tab-border">1</span><span>Booking Information</span></a></li>
                                <li><a href="#personal" data-toggle="tab"><span class="tab-border">2</span><span>
                                            Your Information</span></a></li>
                            </ul>
                        </div>
                        <div class="service-tab-desc text-left mt-60">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="booking">

                                    <div class="booking-info-details">
                                        <div class="single-room-details fix">
                                            <div class="room-img">
                                                <img src="<?= base_url() ?>/images/kamar/<?= $detail->gambar ?>" alt="">
                                            </div>
                                            <div class="single-room-details pl-50">
                                                <h3 class="s_room_title">
                                                    <?= $detail->jenis ?>
                                                </h3>
                                                <div class="room_price"><br>
                                                    <h4>Price </h4><br>
                                                    <h5>
                                                        <?= $detail->harga ?> / <span>Night</span>
                                                    </h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad
                                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                        aliquip
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-room-booking-form mt-60">
                                            <div class="booking_form_inner">
                                                <div class="single-form-part">
                                                    <div class="date-to mb-20">
                                                        <form action="<?= site_url('Auth/do_booking') ?>" method="POST">
                                                            <input id="checkin_date" value="Arrive date"
                                                                name="checkin_date">
                                                            <i class="mdi mdi-calendar-text"></i>
                                                    </div>
                                                    <div class="select-option">
                                                        <select name="amount">
                                                            <option selected>Adult</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="single-form-part">
                                                    <div class="date-to mb-20">
                                                        <input id="checkout_date" value="Departure Date"
                                                            name="checkout_date">
                                                        <i class="mdi mdi-calendar-text"></i>
                                                    </div>
                                                    <div class="select-option">
                                                        <input type="text" readonly name="jenis"
                                                            value="<?= $detail->jenis ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="personal">
                                    <div class="personal-info-details">
                                        <div class="booking-info-inner">
                                            <div class="booking-form-list">
                                                <div class="single-form-part">
                                                    <div class="name mb-15">
                                                        <input type="text" placeholder="Nama Lengkap"
                                                            value="<?= $this->session->userdata('nama') ?>" readonly=""
                                                            name="nama">
                                                    </div>
                                                </div>

                                                <div class="single-form-part">
                                                    <div class="mail mb-15">
                                                        <input type="text" placeholder="Email"
                                                            value="<?= $this->session->userdata('email') ?>" readonly=""
                                                            name="email">
                                                    </div>
                                                </div>

                                                <div class="single-form-part">
                                                    <div class="name mb-15">
                                                        <input type="tell" placeholder="No Telp."
                                                            value="<?= $this->session->userdata('no') ?>" readonly=""
                                                            name="no">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="prve-next-box mt-20">
                                                <div class="back-link">
                                                    <a href="<?= site_url('Welcome') ?>">Cancel</a>
                                                </div>
                                                <button type="submit">Book Now</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="<?= base_url('assets/js/vendor/jquery-1.12.0.min.js'); ?>"></script> -->

    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>

    <!--  <script src="<?= base_url('assets/js/waypoints.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.counterup.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/video-player.js'); ?>"></script>
    <script src="<?= base_url('assets/js/animated-headlines.js'); ?>"></script>
    <script src="<?= base_url('assets/js/mailchimp.js'); ?>"></script>
    <script src="<?= base_url('assets/js/ajax-mail.js'); ?>"></script>
    <script src="<?= base_url('assets/js/parallax.js'); ?>"></script>
    <script src="<?= base_url('assets/js/textilate.js'); ?>"></script>
    <script src="<?= base_url('assets/js/lettering.js'); ?>"></script>
    <script src="<?= base_url('assets/js/isotope.pkgd.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/packery-mode.pkgd.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.magnific-popup.js'); ?>"></script>
    <script src="<?= base_url('assets/js/plugins.js'); ?>"></script>
    <script src="<?= base_url('assets/js/main.js'); ?>"></script> 
-->

</body>

</html>