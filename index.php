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

<script>
	var dataLayer = (typeof dataLayer !== 'undefined') ? dataLayer : [];

	dataLayer.push({
		'userId' : '<?php echo USER_ID;?>', 
		'user_cohort' : '<?php echo USER_COHORT;?>',
		'user_name': '<?php echo USER_NAME;?>',
		'user_login': '<?php echo USER_LOGIN;?>',
		'user_age': '<?php echo USER_AGE;?>',
		'user_last_login': '<?php echo USER_LAST_ACCESS;?>',
		'pageTemplate': 'landingPage',
		'contentGroup1': 'Landings'
	});
</script>
   
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
 
 <!-- 
 
 $('document').ready(function(){
  $('.btn').css( "width", "100%" );
});

var d = document.getElementById("div1");
d.className = d.className + " otherclass";
    
    
//Javascript
var x = document.getElementsByClassName("btn-default");
x[0].className = x[0].className + ' btn-primary';
    
    
    x[0].innerText = "Hola";
	
	var e = document.getElementById('hero').style.backgroundImage = 'url(http://master.milanding.ovh/assets/img/background/smb_owner.jpg)';;

	
	//jQuery
	$(".btn-default").first().addClass("btn-primary");
	$(".btn-default").first().text("Register in one step");

   $('.btn-default')[0].innerHTML; 
   
   $('#hero').css("background", "url('http://master.milanding.ovh/assets/img/background/smb_owner.jpg') top center no-repeat");
   
.register-version.static-header {
  background: url('../img/background/smb_owner.jpg') top center no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-attachment: fixed;
  min-height: 1155px;
  position: relative;
}   
-->


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

    <div id="hero" class="static-header plain-version light clearfix">
        <div class="text-heading">
            <h1 class="animated hiding" data-animation="bounceInDown" data-delay="0">Want to become a  <span class="highlight">GTM </span> ninja?</h1>
            <p class="animated hiding" data-animation="fadeInDown" data-delay="500">&mdash; Start tracking this site now!</p>
            <ul class="list-inline">
                <li><a id="register" href="form.php" class="btn btn-default animated hiding" data-animation="bounceIn" data-delay="500">Register Now!</a></li>
                <li><a id="register" href="ajaxform.php" class="btn btn-default animated hiding" data-animation="bounceIn" data-delay="700">Register Now! (Ajax)</a></li>
                <li><a id="video" href="video.php" class="btn btn-default animated hiding" data-animation="bounceIn" data-delay="900">Watch the video</a></li>
            </ul>
        </div>
    </div>
    

    
    <a id="showHere"></a>
 

    
  
    
	<section id="about" class="section dark">
        <div class="container">
		
            <ul class="nav nav-tabs alt">
                <li class="active"><a href="#first-tab-alt" data-toggle="tab">FIRST TAB</a></li>
                <li><a href="#second-tab-alt" data-toggle="tab">SECOND TAB</a></li>
                <li><a href="#third-tab-alt" data-toggle="tab">THIRD TAB</a></li>
            </ul>
                    
            <div class="tab-content alt">
				<div class="tab-pane active" id="first-tab-alt">
					<div class="section-content row">        
								<div class="col-sm-6 animated hiding" data-animation="fadeInLeft">
									<img src="assets/img/features/people.jpg" class="img-responsive" alt="process 3" />
								</div>
								<div class="col-sm-6 animated hiding" data-animation="fadeInRight">
									<br/>
									<article class="center">
										<h3>FOR EVERY <span class="highlight">STARTUP</span></h3>
										<div class="sub-title">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br/> sdfs sit atmet sit dolor greand fdanrh sdfs</div>
										<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
										<br/>
										<a href="<?php echo URL_SUBDOMINIO;?>" target="_blank" class="btn btn-secondary animated hiding" data-animation="bounceIn" data-delay="700">Shop now!</a>
									</article>
								</div>
					</div>
                </div>
					
                <div class="tab-pane" id="second-tab-alt">
                           <div class="section-content row">                
								<div class="col-sm-6 pull-right animated hiding" data-animation="fadeInRight">
									<img src="assets/img/features/phone.jpg" class="img-responsive pull-right" alt="process 2" />
								</div>
								<div class="col-sm-6 animated hiding" data-animation="fadeInLeft">

									<br/><br/>
									<article class="center">
										<h3>NEW AGE <span class="highlight">TECHNOLOGY</span></h3>
										<div class="sub-title">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br/> sdfs sit atmet sit dolor greand fdanrh sdfs</div>
										<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
									</article>
								</div>
					</div>
                </div>

                <div class="tab-pane" id="third-tab-alt">
					<div class="section-header animated hiding center" data-animation="fadeInDown">
						<h2>3 EASY STEPS</h2>
						<div class="sub-heading">
							Lorem ipsum dolor sit atmet sit dolor greand fdanrh s
							<br />dfs sit atmet sit dolor greand fdanrh sdfs
						</div>
					</div>
					<div class="section-content row">
						<div class="col-sm-4">
							<article class="text-center animated hiding" data-animation="fadeInLeft" data-delay="0">
								<i class="howitworks icon icon-shopping-04 icon-active"></i>
								<span class="h7">PLACE ORDER</span>
								<p class="thin" >Sit amet, consectetur adipiscing elit.<br />In hac divisione rem ipsam prorsus probo<br />elegantiam desidero.</p>
							</article>
							<!--<span class="icon icon-arrows-04"></span>-->
						</div>
						<div class="col-sm-4">
							<article class="text-center animated hiding" data-animation="fadeInLeft" data-delay="400">
								<i class="howitworks icon icon-seo-icons-03 icon-active"></i>
								<span class="h7">OUR SYSTEM RUNS</span>
								<p class="thin" >Sit amet, consectetur adipiscing elit.<br />In hac divisione rem ipsam prorsus probo<br />elegantiam desidero.</p>
							</article>
							<!--<span class="icon icon-arrows-04"></span>-->
						</div>
						<div class="col-sm-4">
							<article class="text-center animated hiding" data-animation="fadeInLeft" data-delay="800">
								<i class="howitworks icon icon-seo-icons-05 icon-active"></i>
								<span class="h7">RECEIVE REPORT</span>
								<p class="thin" >Sit amet, consectetur adipiscing elit.<br />In hac divisione rem ipsam prorsus probo<br />elegantiam desidero.</p>
							</article>
						</div>
					</div>
					<br/>
					<br/>
				</div>	
			</div>
        </div>
    </section>
    
    <hr class="no-margin" />
    

    
    <section id="features" class="section inverted">
    
        <div class="container">
            <div class="section-content">
                <div id="featuredTab">
                    <ul class="list-unstyled animated hiding" data-animation="fadeInRight">
                      <li class="active">
                          <a href="#home" data-toggle="tab">
                              <div class="tab-info">
                                  <div class="tab-title">Lorem Dolor</div>
                                  <div class="tab-desc">Sit amet, consectetur adipiscing elit<br />hac divisione rem ipsam prorsus</div>
                              </div>
                              <!--<div class="tab-icon"><span class="icon icon-multimedia-20"></span></div>-->
                          </a>
                      </li>
                      <li>
                          <a href="#profile" data-toggle="tab">
                              <div class="tab-info">
                                  <div class="tab-title">Lorem Dolor</div>
                                  <div class="tab-desc">Sit amet, consectetur adipiscing elit<br />hac divisione rem ipsam prorsus</div>
                              </div>
                              <!--<div class="tab-icon"><span class="icon icon-seo-icons-27"></span></div>-->
                          </a>
                      </li>
                      <li>
                          <a href="#messages" data-toggle="tab">
                              <div class="tab-info">
                                  <div class="tab-title">Lorem Dolor</div>
                                  <div class="tab-desc">Sit amet, consectetur adipiscing elit<br />hac divisione rem ipsam prorsus</div>
                              </div>
                              <!-- <div class="tab-icon"><span class="icon icon-seo-icons-28"></span></div>-->
                          </a>
                      </li>
                    </ul>
                    
                    <div class="tab-content animated hiding" data-animation="fadeInLeft">
                      <div class="tab-pane in active" id="home"><img src="assets/img/features/rich_features_1.png" class="img-responsive animated hiding" data-animation="fadeInLeft" alt="macbook" /></div>
                      <div class="tab-pane" id="profile"><img src="assets/img/features/rich_features_2.png" class="img-responsive animated hiding" data-animation="fadeInLeft" alt="macbook" /></div>
                      <div class="tab-pane" id="messages"><img src="assets/img/features/rich_features_3.png" class="img-responsive animated hiding" data-animation="fadeInLeft" alt="macbook" /></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
	

	<section id="awards" class="section dark">
        <div class="container">
            <div class="section-header animated hiding" data-animation="fadeInDown">
                <h2><span class="highlight">OUR</span> AWARDS</h2>
                <div class="sub-heading">
                    Lorem ipsum dolor sit atmet sit dolor greand fdanrh s
                    <br />dfs sit atmet sit dolor greand fdanrh sdfs
                </div>
            </div>
            <div class="section-content">                
                <ul class="list-inline logos">
                    <li><a href="#" target="_blank"><img class="animated hiding" data-animation="fadeInUp" data-delay="0" src="assets/img/logos/award-5.jpg" alt="mashable" /></a></li> 
                    <li><a href="#" target="_blank"><img class="animated hiding" data-animation="fadeInUp" data-delay="400" src="assets/img/logos/award-3.jpg" alt="virgin" /></a></li> 
					<li><a href="#" target="_blank"><img class="animated hiding" data-animation="fadeInUp" data-delay="600" src="assets/img/logos/award-4.jpg" alt="forbes" /></a></li> 
                    <li><a href="#" target="_blank"><img class="animated hiding" data-animation="fadeInUp" data-delay="800" src="assets/img/logos/award-1.jpg" alt="microsoft" /></a></li> 					
                </ul>
            </div>
        </div>
    </section>
    



	

    
    <section id="guarantee" class="long-block light">
        <div class="container">
            <div class="col-md-12 col-lg-9">
				<i class="icon icon-seo-icons-24 pull-left"></i>
                <article class="pull-left">
                    <h2>BE A <strong>GOOGLE TAG MANAJER</strong> NINJA!</h2>
                    <p class="thin">Take a professional training to become a Google Tag Manager specialist with this hads-on training course.</p>
                </article>
            </div>
			
            <div class="col-md-12 col-lg-3">
                <a href="http://kschool.com/cursos/programa-profesional-de-google-tag-manager/?utm_source=ksmasteraw&utm_medium=link&utm_campaign=gtmninja" class="btn btn-default">Exit link</a>
            </div>
        </div>
    </section>
 
	<section id="team" class="section dark">
        <div class="container">
            <div class="section-header animated hiding" data-animation="fadeInDown">
                <h2>BEHIND THE <span class="highlight">DATALAYER</span> </h2>
				<div class="sub-heading">
                    Lorem ipsum dolor sit atmet sit dolor greand fdanrh s
                    <br>dfs sit atmet sit dolor greand fdanrh sdfs
                </div>
				<br/>
				<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil<br/> ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae<br/> qui non vident, nihilamane umquam magnum ac cognitione. In his rest gestiret. Sed ipsam inchoavit, nihil ampliusuma.<br/> Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident,<br/> nihilamane umquam magnum ac cognitione.</p>
            </div>
            <div class="section-content row">
                        <div class="member col-md-3 col-sm-3 col-xs-6 animated hiding" data-animation="fadeInDown">
                            <div class="thumb-wrapper">
								<div class="overlay img-circle"></div>
								<div class="socials">
									<a href="#" data-product-name="Wo'o Album #3" data-product-id="415911510" data-product-price="9"><span class="icon icon-shopping-18"></span></a>
								</div>
                                <img src="/assets/fotos/cd_3_angle-300x300.jpg" class="img-responsive img-circle" alt="thumb" />
                            </div>
							<span class="h7 highlight">Woo Album #3</span>
							<p class="thin">9 €</p>
                        </div>  
						
						<div class="member col-md-3 col-sm-3 col-xs-6 animated hiding" data-animation="fadeInDown" data-delay="250">
                            <div class="thumb-wrapper">
								<div class="overlay img-circle"></div>
                                <div class="socials">
									<a href="#" data-product-name="Woo Logo" data-product-id="415911511" data-product-price="18"><span class="icon icon-shopping-18"></span></a>
                                </div>
                                <img src="/assets/fotos/T_1_front-300x300.jpg" class="img-responsive img-circle" alt="thumb" />
                            </div>
							<span class="h7 highlight">Woo Logo</span>
							<p class="thin">18 €</p>
                        </div>     
						
						<div class="member col-md-3 col-sm-3 col-xs-6 animated hiding" data-animation="fadeInDown" data-delay="500">
                            <div class="thumb-wrapper">
								<div class="overlay img-circle"></div>
                                <div class="socials">
									<a href="#" data-product-name="Woo Ninja" data-product-id="415911512" data-product-price="15"><span class="icon icon-shopping-18"></span></a>
								</div>
                                <img src="/assets/fotos/poster_4_up-300x300.jpg" class="img-responsive img-circle" alt="thumb" />
                            </div>
							<span class="h7 highlight">Woo Ninja</span>
							<p class="thin">15 €</p>
                        </div>                        
						
						<div class="member col-md-3 col-sm-3 col-xs-6 animated hiding" data-animation="fadeInDown" data-delay="750">
                            <div class="thumb-wrapper">
								<div class="overlay img-circle"></div>
                                <div class="socials">
									<a href="#" data-product-name="Ship Your Idea" data-product-id="415911510" data-product-price="30"><span class="icon icon-shopping-18"></span></a>
								</div>
                                <img src="/assets/fotos/hoodie_7_front-300x300.jpg" class="img-responsive img-circle" alt="thumb" />
                            </div>
							<span class="h7 highlight">Ship Your Idea</span>
							<p class="thin">30 €</p>
                        </div>

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
                    <p><strong>@jrcajide, Founder</strong>.</p>
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
                            28028, Madrid (Spain)
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
        <div class="copyright">@jrcajide 2015. All rights reserved.</div>
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