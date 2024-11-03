<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking Information - Sparky Hotel</title>
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
    <!-- Ajax -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css"
        rel="stylesheet" type="text/css" />

    <style>
    .header-cell h3 {
        padding: 10px 0;
        font-weight: bold;
    }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script language="javascript">
    $(document).ready(function() {
        $("#checkin_date").datepicker({
            minDate: 0,
            dateFormat: "dd-M-yy",
            onSelect: function(date) {
                var date2 = $('#checkin_date').datepicker('getDate');
                date2.setDate(date2.getDate());
                $('#checkout_date').datepicker('setDate', date2);
                //sets minDate to dateofbirth date + 1
                $('#checkout_date').datepicker('option', 'minDate', date2);
            }
        });
        $('#checkout_date').datepicker({
            minDate: 0,
            dateFormat: "dd-M-yy",
            onClose: function() {
                var dt1 = $('#checkin_date').datepicker('getDate');
                console.log(dt1);
                var dt2 = $('#checkout_date').datepicker('getDate');
                if (dt2 <= dt1) {
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
                            <h2>Booking <span>Information</span></h2>

                            <div class="toast">
                                <div class="toast-body">
                                    <p>
                                        <?= $this->session->flashdata('msg'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="booking-rooms-tab">
                            <ul class="nav" role="tablist">
                                <li class="active"><a href="#invoice" data-toggle="tab"><span
                                            class="tab-border">1</span><span>Invoice Status</span></a></li>
                                <li><a href="#payment" data-toggle="tab"><span
                                            class="tab-border">2</span><span>Payment</span></a></li>
                            </ul>
                        </div>
                        <div class="service-tab-desc text-left mt-60">
                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane active" id="invoice">
                                    <div class="booking-done">
                                        <div class="booking-done-table table-responsive text-center"
                                            style="width: 100%;">
                                            <table class="table">
                                                <tr>
                                                    <td colspan="4" class="header-cell">
                                                        <h3>Invoice</h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>
                                                            <?= $trans->amount ?> Room <span>
                                                                <?= $trans->checkin_date ?> -
                                                                <?= $trans->checkout_date ?>
                                                            </span>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p>
                                                            <?= $trans->nama ?> <span></span>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p>
                                                            <?= $trans->email ?> <span></span>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p>
                                                            <?= $trans->no ?>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr class="row2">
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <p>
                                                            <?= $trans->jenis ?> Price/Night :
                                                        </p>
                                                    </td>
                                                    <?php
                                                    $show = $this->db->get_where('kamar', array('jenis' => $trans->jenis))->row();
                                                    ?>
                                                    <td>
                                                        <p>
                                                            <?= $show->harga ?>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr class="row3">
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <p>Grand Total :</p>
                                                    </td>
                                                    <td>
                                                        <p>
                                                            <?= $trans->amount * $show->harga ?>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="payment">
                                    <div class="payment-info">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <form class="payment-form"
                                                        action="<?= site_url('Auth/do_payment') ?>" method="POST">
                                                        <div class="payment-form-list">
                                                            <div class="single-form-part">
                                                                <label for="card-holder-name">Card Holder Name</label>
                                                                <input type="text" name="card-name"
                                                                    placeholder="Enter Card Holder Name" required>
                                                            </div>
                                                            <div class="single-form-part">
                                                                <label for="card-number">Card Number</label>
                                                                <input type="text" name="card-number"
                                                                    placeholder="Enter Your Card Number (16 digits)"
                                                                    required>
                                                            </div>
                                                            <div class="single-form-part">
                                                                <label for="expiration-date">Expiration Date</label>
                                                                <input type="text" name="exp-date" placeholder="MM/YY"
                                                                    required>
                                                            </div>
                                                            <div class="single-form-part">
                                                                <label for="expiration-date">CVV</label>
                                                                <input type="text" name="security"
                                                                    placeholder="CVV (3 digits)" required>
                                                            </div>
                                                        </div>
                                                        <div class="prve-next-box mt-20">
                                                            <div class="back-link">
                                                                <a href="<?= site_url('Welcome') ?>">Back to
                                                                    Homepage</a>
                                                            </div>
                                                            <button type=" submit"
                                                                onclick="return alert('Congratulations! Your payment has been successfully processed. Please wait for the confirmation email.')">Submit
                                                                Payment</button>
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
        </div>
    </div>

</body>

</html>
<script src="<?= base_url('assets/js/vendor/jquery-1.12.0.min.js'); ?>"></script>
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
    <script src="<?= base_url('assets/js/main.js'); ?>"></script> -->