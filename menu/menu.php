<?php include('../includes/arrays.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Menu | The Eastern Heaven</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-kit.css" rel="stylesheet" />
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
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav" style="font-size: 18px;">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../team/team.php">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contact/contact.php">Contact</a>
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
    <div class="wrapper">
        <div class="page-header page-header-small">
            <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/bg6.jpg');">
            </div>
            <div class="container">
                <div class="content-center">
                    <h1 class="title">The Eastern Heaven</h1>
                    <div class="text-center">
                        <a href="#" rel="tooltip" title="Like us on Facebook" data-placement="bottom" class="btn btn-primary btn-icon  btn-icon-mini">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                        <a href="#" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" class="btn btn-primary btn-icon  btn-icon-mini">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-about-us">
            <div class="container">
                <hr><br><br>
                <center>
                    <h2 class="title">Our Delicious Menu</h2>
                    <p style="font-size: 18px;">Our menu is very small - but dang, does it ever pack a punch!<p style="font-size: 18px;" class="text-muted">Click any item to learn about it.</p></p>
                </center>
                <div class="separator separator-primary" style="margin-bottom: 4px;"></div>
                <div style="text-align:center; font-size: 23px;">

                    <ul type="square" style="display: inline-table; margin-top: 15px;">
                        
                        <?php foreach ($menuItems as $dish => $item) { ?>
                            
                            <li style="margin-top: 10px;"><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item['title']; ?></a> &nbsp;-&nbsp; <font class="text-muted"><?php echo $item['price']; ?></font></li>

                        <?php } ?>

                    </ul>

                </div>
            </div>
            <!-- <br><div class="container"><hr></div><br> -->
            
            <div class="separator separator-primary"></div>
            <br>
            <div class="container" style="margin-bottom: 0px;"><hr></div>
            <br>

            </div>
        </div>
        
        <!-- PHP script to import footer -->
        <?php include('../includes/footer.php'); ?>

    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/tether.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-kit.js" type="text/javascript"></script>

</html>