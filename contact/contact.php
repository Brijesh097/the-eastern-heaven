<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Contact | The Eastern Heaven</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-kit.css" rel="stylesheet" />

    <style type="text/css">
        h3 {
            color: red;
        }
    </style>

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
                    <li class="nav-item">
                        <a class="nav-link" href="../menu/menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../team/team.php">Team</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Contact</a>
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
               <!--  <div class="separator separator-primary" style="margin-top: 0px;"></div> -->
                <center>
                    <h2 class="title">Get in touch with us!</h2>

                    <?php 

                    function has_header_injection( $str ) {
                        return preg_match( "/[\r\n]/" , $str );
                    }

                    if ( isset($_POST['contact_submit']) ) {
                        $name   =   trim($_POST['name']);
                        $email  =   trim($_POST['email']);
                        $msg    =   $_POST['message'];

                        if ( has_header_injection($name) || has_header_injection($email) ) {
                            die();
                        }

                        if ( !$name || !$email || !$msg ) {
                            echo '<div class="separator separator-primary" style="margin-bottom: 30px;"></div><h3> All fields required! </h3><a href="contact.php" class="btn btn-danger">GO BACK!</a> <div class="separator separator-primary" style="margin-top: 35px;"></div><br><hr>';
                            exit;
                        }

                        $to          =   "biju941997@gmail.com";

                        $subject     =   "$name sent you a mail via your contact form.";

                        $message     =   "Name: $name\r\n";
                        $message    .=   "Email: $email\r\n";
                        $message    .=   "Message: \r\n$msg";

                            if ( isset( $_POST['subscribe'] ) ) {
                                $message .= "\r\n\r\nPlease add $email to your mailing list.\r\n";
                            }

                            $message     =   wordwrap($message, 72);

                            $headers = "MIME-Version: 1.0\r\n";
                            $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
                            $headers .= "From: " . $name . " <" . $email . ">\r\n";
                            $headers .= "X-Priority: 1\r\n";
                            $headers .= "X-MSMail-Priority: High\r\n\r\n";

                            // Send the email!
                            mail($to, $subject, $message, $headers);

                    ?>

                    <!-- Show success message after email has sent -->
                    <h4 style="font-size: 27px; color: green;">Thanks for contacting The Eastern Heaven!</h4>
                    <h5 style="font-size: 21px; color: green;">Please allow 24 hours for a response.</h5>
                    <a href="../index.php" class="button block"><button class="btn btn-primary" style="font-size: 15px; margin-top: 15px; margin-bottom: 30px;">&laquo; GO BACK</button></a>

                    <?php } else {  ?>

                        <div class="text-muted" style="font-size: 18px; margin-bottom: 40px;"><p>Please enter your details down below.</p></div>


                    </center>
                    <div class="separator separator-primary" style="margin-bottom: 45px;"></div>
                    <div class="container" style="width: 86%;">
                    <form class="form-horizontal" method="post" action="">
                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="inputEmail3" class="col-sm-2 control-label text-muted" style="font-size: 16px;"><strong>NAME:</strong></label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Enter your name" name="name"  style="height: 50px; font-size: 17px;">
                            </div>
                        </div>
                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="inputPassword3" class="col-sm-2 control-label text-muted" style="font-size: 16px;"><strong>E-MAIL:</strong></label>
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="inputPassword3" placeholder="Enter your e-mail address" name="email"  style="height: 50px; font-size: 17px;">
                            </div>
                        </div>
                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="inputPassword3" class="col-sm-2 control-label text-muted" style="font-size: 16px;"><strong>YOUR MESSAGE:</strong></label>
                            <div class="col-sm-12">
                                <textarea class="form-control" rows="4" placeholder="Add your message" name="message" style="font-size: 17px;"></textarea>
                            </div>
                        </div>
                        <div class="checkbox" style="margin-left: 15px; margin-top:30px; margin-bottom: 26px;">
                            <input id="checkbox1" name="subscribe" type="checkbox">
                            <label for="checkbox1" style="font-size: 16px;">
                                Subscribe to Newsletter
                            </label>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary" style="font-size: 15px; margin-top: 5px;" name="contact_submit">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                    </div>
                    <?php } ?>
                
        <!-- <div class="separator separator-primary"></div> -->
            
        <br><div class="container" style="margin-bottom: 0px;"><hr></div><br>
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