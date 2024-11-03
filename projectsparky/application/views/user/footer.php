<!DOCTYPE html>
<style>
    .footer {
        background: url('<?= base_url("assets/images/footerbg.jpg"); ?>') no-repeat scroll center center;
        background-size: cover;
        background-attachment: fixed;
    }

    .footer-bg-opacity {
        background: rgba(0, 0, 0, 0.8) none repeat scroll 0 0;
    }
</style>

<!--Footer Start -->
<div class="footer ptb-100">
    <div class="footer-bg-opacity"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="single-footer mt-0">
                    <div class="logo">
                        <img src="<?= base_url() ?>assets/images/logo.png" alt="Sparky Hotel">
                    </div>
                </div>
            </div>
            <div class="col-md-3 hidden-sm col-xs-6">
                <div class="single-footer">
                    <h3>Our Hotel</h3>
                    <div class="quick-item">
                        <ul>
                            <li><a href="<?= site_url('Welcome') ?>">Rooms & Suites</a></li>
                            <li><a href="<?= site_url('Welcome/meeting') ?>">Meetings</a></li>
                            <li><a href="<?= site_url('Welcome/wedding') ?>">Wedding & Special Events</a></li>
                            <li><a href="<?= site_url('Welcome/facility') ?>">Facilities</a></li>
                            <li><a href="<?= site_url('Welcome/contact') ?>">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copyright ptb-20 white_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-8 col-xs-12">
                <p>Copyright© 2023 <a href="<?= site_url('Welcome') ?>">Sparky Hotel</a> | All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

</html>