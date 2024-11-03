<!DOCTYPE html>

<style type="text/css">
    .header-section {
        background: url('<?= base_url("assets/images/headerbg.jpg"); ?>')no-repeat scroll center center;
        background-size: cover;
        background-attachment: fixed;
    }

    .header-section.height-vh {
        height: 100vh;
    }

    .header-section,
    .menu .search-bar,
    .b-date,
    .select-book {
        position: relative
    }
</style>

<!--Header section Start-->
<div class="bg-opacity"></div>
<div class="top-header sticky-header">
    <!-- Navigation Bar Start_-->
    <div class="top-header-inner">
        <div class="container">
            <div class="mgea-full-width">
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <div class="logo mt-20">
                            <a href="<?= site_url('Welcome') ?>"><img src="<?= base_url() ?>assets/images/logo.png"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-10 hidden-xs">
                        <div class="header-top ptb-10">

                        </div>
                        <div class="menu mt-25">
                            <div class="menu-list hidden-sm hidden-xs">
                                <nav>
                                    <ul style="text-align: right;">
                                        <li><a href="<?= site_url('Welcome') ?>">Home</a></li>
                                        <li><a href="<?= site_url('Welcome/meeting') ?>">Meeting</a></li>
                                        <li><a href="<?= site_url('Welcome/wedding') ?>">Wedding</a></li>
                                        <li><a href="<?= site_url('Welcome/facility') ?>">Facilities</a></li>
                                        <li><a href="<?= site_url('Welcome/contact') ?>">Contact Us</a></li>
                                        <?php
                                        foreach ($trans as $data) {
                                            if ($data->email == $this->session->userdata('email')):
                                                ?>
                                                <li><a href="<?= site_url('Auth/bookinfo') ?>">Your Reservation</a></li>
                                            <?php endif;
                                        } ?>
                                        <li><a href="<?= site_url('Auth/logout') ?>">Logout</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navigation Bar End -->
    <!-- Mobile menu Start -->
    <div class="mobile-menu-area hidden-lg hidden-md">
        <div class="container">
            <div class="col-md-12">
                <nav id="dropdown">
                    <ul>
                        <li><a href="<?= site_url('Welcome') ?>">Home</a></li>
                        <li><a href="<?= site_url('Auth/meeting') ?>">Meeting</a></li>
                        <li><a href="<?= site_url('Auth/wedding') ?>">Wedding</a></li>
                        <li><a href="<?= site_url('Auth/facility') ?>">Facilities</a></li>
                        <li><a href="<?= site_url('Auth/logout') ?>">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Mobile menu End -->
</div>
<!-- Header Section End-->

</html>