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
    <title><?php echo SUBDOMINIO;?> | Watch the video | Programa Avanzado Google Tag Manger</title>
    <meta name="description" content="programa avanzado google tag manager">
    <meta name="keywords" content="Startups template">
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
    
<script>
	var dataLayer = (typeof dataLayer !== 'undefined') ? dataLayer : [];
	
	dataLayer.push({
		'userId' : '<?php echo SUBDOMINIO;?>' //$_SERVER['PHP_AUTH_USER']
	});
</script>
    
</head>

<body id="landing-page">








<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TLDKL6&gtm_auth=yrqgvUOu3OKksGM1IoPTNQ&gtm_preview=env-4&gtm_cookies_win=x"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl+'&gtm_auth=yrqgvUOu3OKksGM1IoPTNQ&gtm_preview=env-4&gtm_cookies_win=x';f.parentNode.insertBefore(j,f);
})(window,document,'script','masterDataLayer','GTM-TLDKL6');</script>
<!-- End Google Tag Manager -->




    <!-- Preloader -->
    <div id="mask">
        <div id="loader"></div>
    </div>
        
    <header>
        <nav class="navigation navigation-header">
            <div class="container">
                <div class="navigation-brand">
                    <div class="brand-logo">
						<a href="index.html" class="logo"></a>
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
                        <li class="active"><a href="#hero">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#register">Register</a></li>
                        <li><a href="#footer">Contacts</a></li>
                    </ul>
                    <ul class="navigation-bar navigation-bar-right">
                        <li><a href="register.php">Login</a></li>
                        <li class="featured"><a href="register.php">Sign up</a></li>
                    </ul>  
                </div>
            </div>
        </nav>
    </header>
    
    <div id="hero" class="static-header video-version light clearfix">
		<div class="text-heading">
            <h1 class="animated hiding" data-animation="bounceInDown" data-delay="0">Do not wait &mdash; <span class="highlight">launch</span> your startup now!</h1>
            <p class="animated hiding" data-animation="fadeInDown" data-delay="500">this tempate is flexible enough to suit any kind of startup or new business</p>
        </div>
        <div class="video-wrapper">
            <div class="container">
                <div class="video-container animated hiding" data-animation="bounceInUp" data-delay="1000">
                    <div class="embed-container">

                    <iframe src="//player.vimeo.com/video/89527215?api=1&player_id=vimeo-player-1" id="vimeo-player-1" width="640" height="390" frameborder="0" data-progress="true" data-seek="true" data-bounce="true" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                    
                    </div>
                </div>
                <img src="assets/img/features/video-container.png" alt="video" class="img-responsive animated hiding" data-animation="bounceInUp" data-delay="1000" />
            </div>
        </div>
    </div>
    

    
    <a id="showHere"></a>
 

    
  
    
	    <section id="guarantee" class="long-block light">
        <div class="container">
            <div class="col-md-12 col-lg-9">
				<i class="icon icon-seo-icons-24 pull-left"></i>
                <article class="pull-left">
                    <h2><strong>LAUNCH</strong> YOUR STARTUP NOW!</h2>
                    <p class="thin">In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret.</p>
                </article>
            </div>
			
            <div class="col-md-12 col-lg-3">
                <a href="register.php" class="btn btn-default">Register Now!</a>
            </div>
        </div>
    </section>
    
    <footer id="footer" class="footer light">
        <div class="container">
            <div class="footer-content row">
                <div class="col-sm-4">
                    <div class="logo-wrapper">
                        <img src="assets/img/logo.png" alt="logo" />
                    </div>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco. Qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Nisi ut aliquid ex ea commodi consequatur?</p>
                    <p><strong>John Doeson, Founder</strong>.</p>
                </div>
                <div class="col-sm-5 social-wrap">
                    <div class="footer-title">Social Networks 1</div>
                    <ul class="list-inline socials">
                        <li><a href="https://www.facebook.com/mitienda" target="_blank" class="icon icon-socialmedia-08"></a></li>
                        <li><a href="https://www.twitter.com/mitienda" target="_blank" class="icon icon-socialmedia-07"></a></li>             
                        <li><a href="https://plus.google.com/u/0/" target="_blank" class="icon icon-socialmedia-16"></a></li>
                        <li><a href="https://www.pinterest.com/mitienda" target="_blank" class="icon icon-socialmedia-04"></a></li>
                    </ul>
                    <div class="footer-title">Social Networks 2</div>                    
                    <ul class="list-inline socials">
                        <li><a href="https://www.facebook.com/mitienda" target="_blank"><span class="icon icon-socialmedia-08"></span></a></li>
                        <li><a href="https://www.twitter.com/mitienda" target="_blank"><span class="icon icon-socialmedia-07"></span></a></li>                       
                        <li><a href="https://plus.google.com/u/0/" target="_blank"><span class="icon icon-socialmedia-16"></span></a></li>
                        <li><a href="https://www.pinterest.com/mitienda" target="_blank"><span class="icon icon-socialmedia-04"></span></a></li>
                    </ul>

                </div>
                <div class="col-sm-3">
                    <div class="footer-title">Our Contacts</div>
                    <ul class="list-unstyled">
                        <li>
                            <span class="icon icon-chat-messages-14"></span> 
                            <a href="mailto:info@startup.ly">info@mitienda.ovh</a>
                        </li>
                        <li>
                            <span class="icon icon-seo-icons-34"></span> 
                            2901 Marmora road, Glassgow, Seattle, WA 98122-1090
                        </li>
                        <li>
                            <span class="icon icon-seo-icons-17"></span>
                            <a href="tel://91123123">+ 34 91 123 123</a>
                        </li>
                        <li>
                            <span class="icon icon-socialmedia-09"></span>
                            <a href="skype://mitienda">mitienda</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">startup.ly 2014. All rights reserved.</div>
    </footer>
    
    <div class="back-to-top"><i class="fa fa-angle-up fa-3x"></i></div>
    
    <!--[if lt IE 9]>
        <script type="text/javascript" src="assets/js/jquery-1.11.0.min.js?ver=1"></script>
    <![endif]-->  
    <!--[if (gte IE 9) | (!IE)]><!-->  
        <script type="text/javascript" src="assets/js/jquery-2.1.0.min.js?ver=1"></script>
    <!--<![endif]-->  
    
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.nav.js"></script>
    <script type="text/javascript" src="assets/js/jquery.appear.js"></script>
    <script type="text/javascript" src="assets/js/jquery.plugin.js"></script>
    <script type="text/javascript" src="assets/js/jquery.countdown.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/waypoints-sticky.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.validate.js"></script>
    <script type="text/javascript" src="assets/js/toastr.min.js"></script>
    <script type="text/javascript" src="assets/js/headhesive.min.js"></script>
	<script type="text/javascript" src="assets/mailchimp/js/mailing-list.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>
</body>
</html>