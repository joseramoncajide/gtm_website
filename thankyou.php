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
   
</head>

<body id="landing-page">
<?php
echo GTM_CODE;
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
            <h1>Thank you  <span class="highlight">for registering</span> </h1>
            <p>&nbsp;</p>
 

            
        </div>
  
  
    <section id="guarantee" class="long-block light">
        <div class="container">
            <div class="col-md-12 col-lg-9">
			
                <article class="pull-left">
                    <h2><strong>FREE</strong> REPORT!</h2>
                    <p class="thin">You can download a free report now.</p>
                </article>
            </div>
			
            <div class="col-md-12 col-lg-3">
                <a href="/assets/downloads/a.pdf" class="btn btn-default" target="_blank">Download as PDF</a>
            	<a href="/assets/downloads/b.png" class="btn btn-default" target="_blank">Download as PNG</a>

            </div>
        </div>
    </section>

       
        
 
    
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
    <script type="text/javascript" src="assets/js/scripts_form.js"></script>

</body>
</html>