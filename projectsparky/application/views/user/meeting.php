<!DOCTYPE html>
<html>

<head>
    <title>Meeting - Sparky Hotel</title>
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

    <!-- About Container -->
    <div class="w3-container" id="about">
        <div class="w3-content" style="max-width:700px">
            <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE MEETING</span></h5>
            <p>
                A meeting at a hotel is a gathering held at the hotel's facilities for business, organizational, or
                group purposes. Hotels provide meeting rooms equipped with necessary facilities and equipment such
                as audio-visual aids, presentation tools, and internet access. Meetings at hotels typically involve
                discussions, presentations, negotiations, or other activities related to predetermined goals. Hotels
                may also offer catering services to fulfill food and beverage needs during the meeting. The
                advantages of holding a meeting at a hotel include a professional environment, convenient
                facilities, and customized services to meet the participants' needs. Hotels are often a popular
                choice for meetings because they can offer a variety of meeting spaces tailored to the size and type
                of gathering desired.
            </p>
            <img src="<?= base_url() ?>/assets/images/meeting_room2.jpg" style="width:100%;max-width:1000px"
                class="w3-margin-top">
            <p><strong>Opening hours:</strong> everyday from 6am to 5pm.</p>
            <p><strong>Address:</strong>Sparky Hotel, 42 Legok Street, 43043 Tangerang</p>
        </div>
    </div>

    <!-- Menu Container -->
    <div class="w3-container" id="menu">
        <div class="w3-content" style="max-width:700px">

            <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">FACILITIES</span></h5>

            <div class="w3-row w3-center w3-card w3-padding">
                <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
                    <div class="w3-col s6 tablink">Basic</div>
                </a>
                <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
                    <div class="w3-col s6 tablink">Additional</div>
                </a>
            </div>

            <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
                <h5>Meeting Space</h5>
                <p class="w3-text-grey">A dedicated room or space suitable for hosting meetings, equipped with
                    tables and chairs.</p><br>

                <h5>Audio-Visual Equipment</h5>
                <p class="w3-text-grey">Essential equipment such as a projector, screen, sound system, and
                    microphones.</p>
                <br>

                <h5>High-Speed Internet</h5>
                <p class="w3-text-grey">Reliable internet connectivity to facilitate online meetings and data
                    sharing.</p><br>

                <h5>Furniture and Layout</h5>
                <p class="w3-text-grey">Tables and chairs arranged in various layouts to suit different meeting
                    styles.</p>
                <br>

                <h5>Whiteboards or Flipcharts</h5>
                <p class="w3-text-grey">Tools for visual aids and brainstorming sessions.
                    Climate Control: Air conditioning or heating systems to maintain a comfortable temperature.</p>
            </div>

            <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
                <h5>Refreshments</h5>
                <p class="w3-text-grey">Availability of water, coffee, tea, and potentially catering services for
                    meals or snacks.</p><br>

                <h5>Advanced Audio-Visual Equipment</h5>
                <p class="w3-text-grey">Additional equipment like video conferencing systems, advanced sound
                    systems, and large displays</p><br>

                <h5>Technical Support</h5>
                <p class="w3-text-grey">On-site staff to assist with setup, troubleshooting, and technical
                    requirements.</p><br>

                <h5>Parking Facilities</h5>
                <p class="w3-text-grey">Access to parking spaces or arrangements for attendees' vehicles.</p><br>

                <h5>Accessibility</h5>
                <p class="w3-text-grey">Meeting rooms designed with accessibility features for individuals with
                    disabilities.</p>
            </div>
        </div>
    </div>

    <!-- Contact/Area Container -->
    <div class="w3-container" id="where" style="padding-bottom:32px;">
        <div class="w3-content" style="max-width:700px">
            <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">CONTACT US</span></h5>
            <p>We value your feedback and are here to assist you. Please feel free
                to get in touch with us using the
                following contact information:</p>
            <form action="<?= site_url('Auth/do_contact') ?>">
                <p><input class="w3-input w3-padding-16 w3-border" type="email" placeholder="Email" required
                        name="email"></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="phone" placeholder="Phone Number" required
                        name="People"></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time"
                        required name="date" value="2023-06-15T20:00"></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="text"
                        placeholder="Message \ Special requirements" required name="Message"></p>
                <p><button class="w3-button w3-black" type="submit" onclick="return alert('Done')">SEND
                        MESSAGE</button></p>
            </form>
        </div>
    </div>

    <!-- End page content -->

    <!-- Footer Section Start -->
    <footer>
        <?= include('footer.php'); ?>
    </footer>
    <!-- Footer Section End -->
    <script type="text/javascript">
        function openMenu(evt, menuName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("menu");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
            }
            document.getElementById(menuName).style.display = "block";
            evt.currentTarget.firstElementChild.className += " w3-dark-grey";
        }
        document.getElementById("myLink").click();
    </script>

</body>

</html>