<?php
require "gtm.inc.php";
require "crm.inc.php";

?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Learning Google Tag Manger</title>
    <meta name="description" content="programa avanzado google tag manager">
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.jpg">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.jpg">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.jpg">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/font-lineicons.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/toastr.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />

    <!--[if lt IE 9]>
        <script src="assets/js/html5.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<script src="http://www.geoplugin.net/javascript.gp"></script>

<?php
include 'dataLayer.inc.php';
?>

<?php
if (defined('GTM_CODE') AND !empty(GTM_CODE)) {
    echo"<!-- Google Tag Manager -->", PHP_EOL;
    echo "<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':";
    echo "new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],";
    echo "j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=";
    echo "'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);";
    echo "})(window,document,'script','dataLayer','";
    echo GTM_CODE;
    echo"');</script>";
    echo "<!-- End Google Tag Manager -->", PHP_EOL;

}
?>
</head>
<body id="landing-page">
<?php
if (defined('GTM_CODE') AND !empty(GTM_CODE)) {
  echo"<!-- Google Tag Manager (noscript) -->", PHP_EOL;
  echo'<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=';
  echo GTM_CODE;
  echo'"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>', PHP_EOL;
  echo"<!-- End Google Tag Manager (noscript) -->", PHP_EOL;
}
?>




    <!-- Preloader -->
    <div id="mask">
        <div id="loader"></div>
    </div>

<?php
include 'header.inc.php';
?>


    <div id="hero" class="static-header light">
        <div class="text-heading">
            <h1>A simple <span class="highlight">Ajax</span> Form</h1>
            <p>Learn to track <span class="highlight">submissions</span>  <span>in ajax forms with no Thank You page.</span></p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                    <form class="form form-register dark" id="registration" method="post" action="signup.php">
                        <div class="form-group">
                            <label for="fullname" class="col-sm-3 col-xs-12 control-label">Full name</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="text" class="form-control required" name="fullname" id="fullname" placeholder="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-3 col-xs-12 control-label">Email address</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="email" class="form-control required email" name="email" id="email" placeholder="">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="newsletter" value="1"> Submit to the monthly newsletter
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Get started</button>
                    </form>

                    <p class="agree-text">By clicking you agree to our Terms of Service, Privacy Policy & Refund Policy.<br />
                    </p>
                </div>
            </div>
        </div>

    </div>



    <div class="back-to-top"><i class="fa fa-angle-up fa-3x"></i></div>

    <!--[if lt IE 9]>
        <script type="text/javascript" src="assets/js/jquery-1.11.0.min.js?ver=1"></script>
    <![endif]-->
    <!--[if (gte IE 9) | (!IE)]><!-->
        <script type="text/javascript" src="assets/js/jquery-2.1.0.min.js?ver=1"></script>
    <!--<![endif]-->

    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.nav.js"></script>
    <script type="text/javascript" src="assets/js/jquery.appear.js"></script>
    <script type="text/javascript" src="assets/js/jquery.plugin.js"></script>
    <script type="text/javascript" src="assets/js/jquery.countdown.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/waypoints-sticky.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.validate.js"></script>
    <script type="text/javascript" src="assets/js/toastr.min.js"></script>
    <script type="text/javascript" src="assets/js/headhesive.min.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>

</body>
</html>
