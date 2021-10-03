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
            <h1>Sign up for a <span class="highlight">free</span> account</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                    <form class="form form-register dark" id="registration" method="post" target="no-target" action="signup.php">
                         <div class="form-group">
                            <label for="email" class="col-sm-3 col-xs-12 control-label">Email address</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="email" class="form-control required email" name="email" id="email" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fullname" class="col-sm-3 col-xs-12 control-label">Full name</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="text" class="form-control required" name="fullname" id="fullname" placeholder="">
                            </div>
                        </div>
                     	<div class="form-group">
                            <label for="fullname" class="col-sm-3 col-xs-12 control-label">Birth date</label>
                            <div class="col-sm-4 col-xs-12">
                                <input type="text" class="form-control required" name="year" id="year" placeholder="YYYY">
                            </div>
                            <div class="col-sm-2 col-xs-12">
                                <input type="text" class="form-control required" name="month" id="month" placeholder="MM">
                            </div>
                            <div class="col-sm-2 col-xs-12">
                                <input type="text" class="form-control required" name="day" id="day" placeholder="DD">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-3 col-xs-12 control-label">User name</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="text" class="form-control required" name="username" id="username"  placeholder="You can use: <?php echo array_shift((explode(".",$_SERVER['HTTP_HOST'])));?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-sm-3 col-xs-12 control-label">Password</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="password" class="form-control required" name="password" id="password" placeholder="4 characters are enough">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword" class="col-sm-3 col-xs-12 control-label">Password</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="password" class="form-control required" name="confirmPassword" id="confirmPassword" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">

                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Get started</button>
                    </form>

                    <p class="agree-text">By clicking you agree to our Terms of Service, Privacy Policy & Refund Policy.<br />
                    </p>
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
    <!--script type="text/javascript" src="assets/js/scripts.js"></script-->


<script>

(function(){
    window.app 			         = {el : {}, fn : {}};
	app.el['window']         = $(window);
	app.el['document']       = $(document);
    app.el['loader']         = $('#loader');
    app.el['mask']           = $('#mask');
    app.el['loader'].delay(700).fadeOut();
    app.el['mask'].delay(1200).fadeOut("slow");

// Form validation - sign up
	toastr.options = {"positionClass": "toast-top-full-width"};
    if( $('.form-register').length ) {
      $('.form-register').validate({
        rules: {
          password: {
            minlength: 4
          },
          confirmPassword: {
            minlength: 4,
            equalTo: "#password"
          },
          year: {
            minlength: 4,
            maxlength: 4,
            number: true
          },
          day: {
            minlength: 2,
            maxlength: 2,
            number: true
          },
          month: {
            minlength: 2,
            maxlength: 2,
            number: true
          }
        },
        messages: {
          fullname: "Please enter your fullname",
          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
          },
          confirmPassword: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long",
            equalTo: "Please enter the same password as above"
          },
          email: "Please enter a valid email address"
        },
        submitHandler: function(form) {

            var inputEmail = $('#email').val(); console.log("-> Email:" + inputEmail);

            var inputYear = $('#year').val(); console.log("-> Year:" + inputYear);

            var inputMonth = $('#month').val(); console.log("-> Month:" + inputMonth);

            var inputDay = $('#day').val(); console.log("-> Day:" + inputDay);

            var fechaNac = inputYear+'/'+inputMonth+'/'+inputDay; console.log("-> fechaNac:" + fechaNac);

            var inputFullName = $('#fullname').val(); console.log("-> Nombre:" + inputFullName);

            var inputUserName = $('#username').val(); console.log("-> Usuario:" + inputUserName);

            var inputPassword = String($('#password').val()); console.log("-> Clave:" + inputPassword);

            // var clientIdSplit = ga.getAll()[0].get('clientId').split('.');
            // var clientId = String(clientIdSplit[0]);
            // console.log("-> clientId:" + clientId);

            var values = {
              'Email': inputEmail,
              'Nombre': inputFullName,
              'Fecha_nac': fechaNac,
              'Usuario': inputUserName,
              'Password': inputPassword
              // 'Cookie_ga': clientId
            };

          var $this = $(form);

          $.ajax({
            url: 'https://script.google.com/macros/s/AKfycbyqkcww_XyzAOqe2tvbS8QhWhVlVqbjNuKmkA6dvPR8xCkLs8c/exec',
            type: 'POST',
            //data: $this.serialize(),
            data: values,
          })
          .done(function(msg) {
              console.log('Formulario enviado correctamente');
              var myDate = new Date();
            	myDate.setMonth(myDate.getMonth() + 12);
            	document.cookie = "logged_user=" + inputUserName + ";expires=" + myDate  + ";domain=.milanding.ovh;path=/";
              console.log('Cookie creada para ' + inputUserName);
              toastr.success('Thank you for signing up.');

              window.setTimeout( function(){
            			window.location.replace("index.php");
            		}, 900 );
              //$this[0].reset();

          })
          .fail(function() {
            toastr.error('An error occured. Please try again later.');
          });

        }
      });
    }
})();


</script>


</body>
</html>
