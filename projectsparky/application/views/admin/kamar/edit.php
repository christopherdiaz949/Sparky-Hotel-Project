<!DOCTYPE html>
<html>

<head>
    <title>Ubah Data</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="<?= base_url() ?>assets/images/logomini.png">

    <link rel="stylesheet" href="<?= base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <p class="navbar-brand">
                    <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Logo" />
                </p>
                <p class="navbar-brand hidden">
                    <img src="<?php echo base_url('assets/images/logomini.png'); ?>" alt="Logo" />
                </p>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?= site_url('Welcome/index') ?>">
                                <i class="menu-icon fa fa-dashboard"></i>Dashboard
                            </a>
                        </li>
                        <h3 class="menu-title">Master</h3><!-- /.menu-title -->
                        <li class="menu-item-has-children active dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"> <i class="menu-icon fa fa-bars"></i>Data</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-bed"></i><a href="<?= site_url('Room/read') ?>">Room</a></li>
                                <li><i class="fa fa-address-card"></i><a href="<?= site_url('User/read') ?>">User</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Transaction</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-envelope"></i><a
                                        href="<?= site_url('Transaction/read') ?>">Pending</a>
                                </li>
                                <li><i class="fa fa-envelope-open"></i><a
                                        href="<?= site_url('Transaction/data') ?>">Confirm</a></li>
                                <li><i class="fa fa-plus"></i><a href="<?= site_url('Transaction/add') ?>">New</a></li>
                            </ul>
                        </li>
                    </ul>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">

                        <div class="form-inline">
                        </div>


                        <div class="dropdown for-message">
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle" style="width: 35px; height: 40px;"
                                src="<?= base_url() ?>/images/user/<?= $this->session->userdata('gambar') ?>">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="<?= site_url('Auth/logout') ?>"><i class="fa fa-power-off"></i>
                                Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true"
                            aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Change Information</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="<?= site_url('Room/read') ?>">Back</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!--  -->
        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Change Room Information:<br>
                                                <?= $detail->jenis ?>
                                            </h3>
                                        </div>
                                        <hr>
                                        <form action="<?= site_url('Room/update/' . $detail->id) ?>" method="post"
                                            novalidate="novalidate" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <img src="<?= base_url('images/kamar/' . $detail->gambar) ?>"
                                                    style="display: block; margin: 0 auto;" width="450px"
                                                    height="280px">
                                            </div>
                                            <input type="hidden" name="id" value="<?= $detail->id ?>">
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Room Type</label>
                                                <input id="cc-name" value="<?= $detail->jenis ?>" name="jenis"
                                                    type="text" class="form-control" maxlength="30" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Price</label>
                                                <input id="cc-number" name="harga" type="tel" class="form-control"
                                                    value="<?= $detail->harga ?>" maxlength="10" required>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp"
                                                            class="control-label mb-1">Availability</label>
                                                        <input id="cc-exp" name="amount" type="tel"
                                                            class="form-control " value="<?= $detail->amount ?>"
                                                            pattern=”[0-9]{1,2}” maxlength="2" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">File
                                                        Picture</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="gambar" type="file"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <input name="simpan" id="payment-button" type="submit"
                                                    class="btn btn-lg btn-info btn-block" value="Save">
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/vendors/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendors/popper.js/dist/umd/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/main.js'); ?>"></script>
</body>

</html>