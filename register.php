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
                        <li class="active"><a href="#index">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#features">Features</a></li>
						<li><a href="#product">Prices</a></li>
                        <li><a href="#feedback">Feedback</a></li>
                        <li><a href="#team">Team</a></li>
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
    
    <div id="hero" class="static-header light">
        <div class="text-heading">
            <h1>Start Your <span class="highlight">30-Day</span> Free Trial</h1>
            <p>Stop pirates from stealing your products and <span>increase sales now!</span></p>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                    <form class="form form-register dark" id="registration" method="post" target="no-target">
                        <div class="form-group">
                            <label for="fullname" class="col-sm-3 col-xs-12 control-label">Full name</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="text" class="form-control required" name="fullname" id="fullname" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-3 col-xs-12 control-label">User name</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="username" id="username" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-3 col-xs-12 control-label">Email address</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="email" class="form-control required email" name="email" id="email" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-3 col-xs-12 control-label">Password</label>
                            <div class="col-sm-9 col-xs-12">
                                <input type="password" class="form-control required" name="password" id="password" placeholder="">
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
                    I have a referral code I'd like to enter</p>
                </div>
            </div>
        </div>
        
        <h4>These companies <span>trust us</span></h4>        
    </div>
    
    <div id="clients">
        <div class="container">
            <ul class="list-inline logos">
                <li><img src="assets/img/logos/logo-1.png" alt="mashable" /></li>
                <li><img src="assets/img/logos/logo-2.png" alt="tnw" /></li>
                <li><img src="assets/img/logos/logo-3.png" alt="virgin" /></li>
                <li><img src="assets/img/logos/logo-4.png" alt="microsoft" /></li>
                <li><img src="assets/img/logos/logo-5.png" alt="forbes" /></li>
            </ul>
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
// Form validation - sign up
	toastr.options = {"positionClass": "toast-top-full-width"};
    if( $('.form-register').length ) {
      $('.form-register').validate({
        rules: {
          password: {
            minlength: 5
          },
          confirmPassword: {
            minlength: 5,
            equalTo: "#password"
          }
        },
        messages: {
          fullname: "Please enter your fullname xxx",
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
       		form.submit();
       		
       		
  
                $.ajax({
                    url: "https://docs.google.com/forms/d/1W1YoM6o5cCrdt1j6CHWE0E4uOlR6fufzkgU22Frjcws/formResponse",
                    data: {"entry.1156608205": $('#fullname').val(), "entry.1346860195": $('#username').val(), "entry.75082348": $('#email').val()},
                    type: "POST",
                    dataType: "xml",
                    statusCode: {
                        0: function() {
                            //Success message
                            console.log('OK 1');
                        },
                        200: function() {
                            //Success Message
                            console.log('OK 2');
                        }
                    }
                });
            
          /*var $this = $(form);
          $.ajax({
            url: $this.attr('action'),
            type: 'POST',
            data: $this.serialize(),
          })
          .done(function(msg) {
            if( msg == 'ok' ) {
              toastr.success('Thank you for signing up.');
              $this[0].reset();
            } else {
              toastr.error('An error occured. Please try again later.');
            }
          })
          .fail(function() {
            toastr.error('An error occured. Please try again later.');
          });
          */
        }      
      });
    }
})();


    $('#registration').one('submit',function(e){
    
    	e.preventDefault();
   
   		console.log("-> Formulario enviado por el usuario");
    	
        var inputEmail = $('#email').val();
        
        console.log("-> Email:" + inputEmail);
        
        var inputFullName = $('#fullname').val();
        
        console.log("-> Nombre:" + inputFullName);
        
        var inputUserName = $('#username').val();
        
        console.log("-> Usuario:" + inputUserName);
        
        var inputPassword = $('#password').val();
        
        console.log("-> Clave:" + inputPassword);
        
        
        if( /(.+)@(.+){2,}\.(.+){2,}/.test(inputEmail) ){
        	
        	console.log('El email es válido');
        	
        	//var clientid = getClientId();
        	
        	//var baseURL = 'https://docs.google.com/forms/d/1FAIpQLSezJPbCTjlxCktTpNwi9nDRsinPM3M2mS_yC9-SfZkeCrn3zA/formResponse?entry_1156608205=' + inputFullName + '&entry_1346860195=' +inputUserName+'&entry_75082348=' + inputEmail+ '&entry_2062009925=' +inputPassword+ '&entry.1755877516='+JSON.stringify(clientid)+'';
        	var baseURL = 'https://docs.google.com/forms/d/1W1YoM6o5cCrdt1j6CHWE0E4uOlR6fufzkgU22Frjcws/formResponse?entry_1156608205=' + inputFullName + '&entry_1346860195=' +inputUserName+'&entry_75082348=' + inputEmail+ '&entry_2062009925=' +inputPassword+'';
        	
        	
        	var submitRef = '&submit=Submit';
        	
        	var submitURL = (baseURL + submitRef);
        	
        	$(this)[0].action=submitURL;
        	
        	//form.submit;
        	
        	$(this).submit();
        	
        	//$('#email').addClass('active').val('Thank You!');
        	
        	
        	//$("#myModal").modal('show');
        
        } else {
        	
        	$('#error').css('display', 'block');
        	
        	
        }
    });
</script>
<iframe src="about:blank" id="no-target" name="no-target" style="visibility:hidden"></iframe>

</body>
</html>