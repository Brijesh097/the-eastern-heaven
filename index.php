<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Home | The Eastern Heaven</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-kit.css" rel="stylesheet" />
</head>

<body class="landing-page">
    <!-- Navbar -->
     <nav class="navbar navbar-toggleable-md bg-primary fixed-top navbar-transparent" color-on-scroll="100">
        <div class="container">
            <div class="navbar-translate">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
                <a class="navbar-brand" rel="tooltip" title="Memories are like mulligatawny soup in a cheap restaurant. It is best not to stir them." data-placement="bottom" target="_blank" style="color: white; font-size: 18px;">
                    The Eastern Heaven
                </a>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav" style="font-size: 18px;">
                    <li class="nav-item active">
                        <a class="nav-link" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu/menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="team/team.php">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact/contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="#">
                            <i class="fa fa-facebook-square"></i>
                            <p class="hidden-lg-up">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="#">
                            <i class="fa fa-instagram"></i>
                            <p class="hidden-lg-up">Instagram</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- PHP script to import header -->
    <?php include('includes/header.php'); ?>

        <div class="section section-about-us">
            <div class="container">
                <hr>
                <br>
                <center>
                <!-- Button trigger modal -->
                <h4>People like our restaurant ...</h4>
                <button class="btn btn-primary" style="font-size: 17px; margin-bottom: 17px;" data-toggle="modal" data-target="#myModal">
                  BECAUSE
                </button>

                <!-- Modal Core -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">BECAUSE ...</h4>
                      </div>
                      <div class="modal-body">
                        Our inviting, comfortable dining room is the perfect place to enjoy a great meal. Or, grab a seat at our neighborhood pub-like bar—our community tables provide an energetic and lively atmosphere that is perfect for our famous Thursday Night Trivia.
                        The Eastern Heaven &amp; Pub is headquartered in Woburn, MA and is proud to serve more than 20 million guests a year in over 100 restaurants throughout the Northeast. We will continue to prosper and grow and will continue to take care of every guest who walks through our doors, just like we've always done. 
                        We treat people right, and that's what makes new guests feel welcome, and regulars feel right at home.
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-simple" data-dismiss="modal">Awesome. That sounds good!</button>
                      </div>
                    </div>
                  </div>
                </div>
                </center>
            </div><br><div class="container"><hr></div><br>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center">
                        <h2 class="title">Who we are?</h2>
                        <p style="font-size: 18px;" class="text-muted">Our founder, <strong>Miles</strong>, had an idea to create a restaurant that was more than a place that served great food. <strong>Miles</strong> wanted to give locals a place where they'd always feel at home. A place where they could get no-nonsense food at down-to-earth prices, and where they'd be treated right by people who had a passion to serve.</p>
                    </div>
                </div>
                 <div class="separator separator-primary"></div>

                <?php include('includes/php-store-hours/index.php'); ?>

                 <div class="separator separator-primary"></div>

            </div>
        </div>

        <!-- PHP script to import footer -->
        <?php include('includes/footer.php'); ?>


    </div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/tether.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="assets/js/now-ui-kit.js" type="text/javascript"></script>

</html>