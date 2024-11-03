<!DOCTYPE html>
<html>

<head>
    <title>Create Transaction</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="<?= base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <link rel="icon" href="<?= base_url() ?>assets/images/logomini.png">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css"
        rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script language="javascript">
        $(document).ready(function () {
            $("#checkin_date").datepicker({
                minDate: 0,
                dateFormat: "dd-M-yy",
                onSelect: function (date) {
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
                onClose: function () {
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
                            <a href="<?= site_url('Welcome/index') ?>"> <i
                                    class="menu-icon fa fa-dashboard"></i>Dashboard
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
                                        href="<?= site_url('Transaction/read') ?>">Pending</a></li>
                                <li><i class="fa fa-envelope-open"></i><a
                                        href="<?= site_url('Transaction/data') ?>">Confirm</a></li>
                                <li><i class="fa fa-plus"></i><a href="<?= site_url('Transaction/add') ?>">Create</a>
                                </li>
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
                            <img class="user-avatar rounded-circle" style="height: 40px; width: 35px;"
                                src="<?= base_url() ?>/images/user/<?= $this->session->userdata('gambar') ?>">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="<?= site_url('Auth/logout') ?>"><i
                                    class="fa fa-power-off"></i>Logout</a>
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
                        <h1>Create New Transaction (Manual)</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="<?= site_url('Welcome/index') ?>">Dashboard</a></li>
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
                                        <form action="<?= site_url('Transaction/create') ?>" method="post"
                                            novalidate="novalidate">
                                            <input type="hidden" name="status" value="Confirm">
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Full Name</label>
                                                <input id="cc-name" name="nama" type="text" class="form-control"
                                                    maxlength="100" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Email</label>
                                                <input id="cc-number" name="email" type="email" class="form-control"
                                                    maxlength="100" required>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Telp.
                                                            Number</label>
                                                        <input id="cc-exp" name="no" type="tel" class="form-control"
                                                            pattern=”[0-9]+” maxlength="15" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Room Type</label>
                                                        <select id="cc-exp" name="jenis" class="form-control" required>
                                                            <?php foreach ($result as $kmr) {
                                                                ?>
                                                                <option>
                                                                    <?= $kmr->jenis ?>
                                                                </option>
                                                                <?php
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Check In</label>
                                                        <input id="checkin_date" name="tglin" type="text"
                                                            class="form-control" required>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Check Out</label>
                                                        <input id="checkout_date" name="tglout" type="text"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Book Room</label>
                                                        <input id="cc-exp" name="amount" type="text"
                                                            class="form-control" pattern=”[0-9]{1,2}” maxlength="2"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <input name="simpan" id="payment-button" type="submit"
                                                    class="btn btn-lg btn-info btn-block" value="Add">
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
    <!--  <script src="<?= base_url('assets/vendors/jquery/dist/jquery.min.js'); ?>"></script> -->
    <script src="<?= base_url('assets/vendors/popper.js/dist/umd/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/main.js'); ?>"></script>
</body>

</html>