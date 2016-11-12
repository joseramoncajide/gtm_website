<?php
$uid = array_shift((explode(".",$_SERVER['HTTP_HOST'])));
//echo $uid;
if ($uid == "milanding") {
	define("SUBDOMINIO", "");
	define("URL_SUBDOMINIO", "http://mitienda.ovh");
} else {
	define("SUBDOMINIO", $uid);
	define("URL_SUBDOMINIO", "http://".$uid.".mitienda.ovh");
}
//echo URL_SUBDOMINIO;
?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title><?php echo SUBDOMINIO;?> | Registro | Programa Avanzado Google Tag Manger</title>
    <meta name="description" content="PSD to HTML5+CSS3 conversion.">
    <meta name="keywords" content="PSD, HTML5, CSS3">
    <meta name="author" content="Erwin Kaddy">

    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.jpg">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.jpg">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.jpg">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/font-lineicons.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/toastr.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    
    <!--[if lt IE 9]>
        <script src="assets/js/html5.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>

<script src="http://www.geoplugin.net/javascript.gp"></script>
    
<script>
	var dataLayer = (typeof dataLayer !== 'undefined') ? dataLayer : [];
	
	dataLayer.push({
		'userId' : '<?php echo SUBDOMINIO;?>' //$_SERVER['PHP_AUTH_USER']
	});
</script>    
    
</head>

<body id="register-page">

<script>

//toastr.success('Thank you for signing up.');
//toastr.error('An error occured. Please try again later.');

/*$('body').on('DOMNodeInserted', '#common-parent', function(e) {
  if ($(e.target).attr('class') === 'myClass') {
    console.log('hit');
  }
});



$(document).on('DOMNodeInserted', '.toast-success', function(e) {
    
    //Evento
    //dataLayer.push({event:'gaevent', eventCategory:'Conversion', eventAction: 'Contactar', eventLabel: ''});
    
    
    //Página virtual
    dataLayer.push({'event':'virtualPage', 'page': '/formulario_enviado', 'pageTitle': 'Gracias por registrarte'});

});

$(document).on('DOMNodeInserted', '.error', function(e) {
	
	//console.log(e.target);
	
	element = e.target;
	
	field = element.getAttribute('for');
    
    dataLayer.push({'event':'gaEvent', 'eventCategory':'Errores en formularios', 'eventAction': 'Registro', 'eventLabel': field + ':' + element.textContent});
    
    
});
*/
/*

document.addEventListener("DOMContentLoaded", function() {


  
  var success = document.querySelector(".toast-success");
  var fail = document.querySelector(".toast-error");

  success.addEventListener('DOMNodeInserted', function(evt) {
	dataLayer.push({'event':'eventga','eventCategory':'OK','eventAction': 'Contactar','eventLabel': ''});
  }, false);
  
  fail.addEventListener('DOMNodeInserted', function(evt) {
	dataLayer.push({'event':'eventga','eventCategory':'OK','eventAction': 'Contactar','eventLabel': ''});
  }, false);  

}, false);




function getClientID() {
  try {
    var trackers = ga.getAll();
    var i, len;
    for (i = 0, len = trackers.length; i < len; i += 1) {
      if (trackers[i].get('trackingId') === "{{CFG_UAId}}") {
        return trackers[i].get('clientId');
      }
    }
  } catch(e) {}  
  return 'false';
}

try {
	var frm =  document.getElementById('registration');	
	var clientid = getClientID();
	if (typeof(frm) != 'undefined' && frm != null && clientid != null) {
		var input = document.createElement("input");
		input.setAttribute("type", "hidden");
		input.setAttribute("name", "clientid");
		input.setAttribute("value", "" + clientid + "");
		frm.appendChild(input);
		console.log("Added clientid field for " + clientid);
		}
}catch(e) {
    console.log("Error trying to add clientid field " + e.message);
}
*/
</script>




<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TLDKL6&gtm_auth=yrqgvUOu3OKksGM1IoPTNQ&gtm_preview=env-4&gtm_cookies_win=x"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl+'&gtm_auth=yrqgvUOu3OKksGM1IoPTNQ&gtm_preview=env-4&gtm_cookies_win=x';f.parentNode.insertBefore(j,f);
})(window,document,'script','masterDataLayer','GTM-TLDKL6');</script>
<!-- End Google Tag Manager -->

    <header>
        <nav class="navigation navigation-header">
            <div class="container">
                <div class="navigation-brand">
                    <div class="brand-logo">
						<a href="index.php" class="logo"></a>
						<span class="sr-only">startup.ly</span>
                    </div>
                    <button class="navigation-toggle visible-xs" type="button" data-toggle="dropdown" data-target=".navigation-navbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navigation-navbar">
                    <ul class="navigation-bar navigation-bar-left">
                    	 <li><a href="/">Home</a></li>
                        <li class="active"><a href="/ajaxform.php">Register [Ajax]</a></li>

                    </ul>

                </div>
            </div>
        </nav>
    </header>
    
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