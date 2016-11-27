<?php
//echo $_SERVER['REQUEST_URI'];
//var_dump(parse_url($_SERVER['REQUEST_URI']));
if($_SERVER['REQUEST_URI'] == '/' OR $_SERVER['REQUEST_URI'] == '/index.php') {
?>

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
                        <li class="active"><a href="#hero">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#register">Register</a></li>
                        <li><a href="#footer">Contacts</a></li>
                    </ul>

                    <ul class="navigation-bar navigation-bar-right">
                                        <?php 
                    if ($_COOKIE['logged_user'] == '') {
						echo '<li class="featured"><a href="register.php">Sign Up</a></li>';
                    } else {
						echo '<li class="menu-item"><a href="#">Welcome '.USER_NAME.'</a></li>';            
                    }
                    ?>

                    </ul>  
                </div>
            </div>
        </nav>
    </header>
<?php
} else {
?>
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
                        <li><a href="index.php">Back to Home</a></li>
                    </ul>

                    <ul class="navigation-bar navigation-bar-right">
                                        <?php 
                    if ($_COOKIE['logged_user'] == '') {
						echo '<li class="featured"><a href="register.php">Sign Up</a></li>';
                    } else {
						echo '<li class="menu-item"><a href="#">Welcome '.USER_NAME.'</a></li>';            
                    }
                    ?>

                    </ul>  
                </div>
            </div>
        </nav>
    </header>
<?php
}
?>



<style>
#barraaceptacion {
    display:none;
    position:fixed;
    left:0px;
    right:0px;
    bottom:0px;
    padding-bottom:20px;
    width:100%;
    text-align:center;
    min-height:40px;
    background-color: rgba(0, 0, 0, 0.5);
    color:#fff;
    z-index:99999;
}
 
.inner {
    width:100%;
    position:absolute;
    padding-left:5px;
    font-family:verdana;
    font-size:12px;
    top:30%;
}
 
.inner a.ok {
    padding:4px;
    color:#00ff2e;
    text-decoration:none;
}
 
.inner a.info {
    padding-left:5px;
    text-decoration:none;
    color:#faff00;
}
</style>
<!--//BLOQUE COOKIES-->
<div id="barraaceptacion" style="display: block;">
    <div class="inner">
        Solicitamos su permiso para obtener datos estadísticos de su navegación en esta web, en cumplimiento del Real 
        Decreto-ley 13/2012. Si continúa navegando consideramos que acepta el uso de cookies.
        <a href="javascript:void(0);" class="ok" onclick="PonerCookie();"><b>OK</b></a> 
    </div>
</div>
 
<script>
function getCookie(c_name){
    var c_value = document.cookie;
    var c_start = c_value.indexOf(" " + c_name + "=");
    if (c_start == -1){
        c_start = c_value.indexOf(c_name + "=");
    }
    if (c_start == -1){
        c_value = null;
    }else{
        c_start = c_value.indexOf("=", c_start) + 1;
        var c_end = c_value.indexOf(";", c_start);
        if (c_end == -1){
            c_end = c_value.length;
        }
        c_value = unescape(c_value.substring(c_start,c_end));
    }
    //console.log(c_value);
    return c_value;
}
 
function setCookie(c_name,value,exdays){
    var exdate=new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
    document.cookie=c_name + "=" + c_value;
}
 
if(getCookie('acepta_cookies')!="1"){
    document.getElementById("barraaceptacion").style.display="block";
}
if(getCookie('acepta_cookies')=="1"){
    document.getElementById("barraaceptacion").style.display="none";
}
function PonerCookie(){
    setCookie('acepta_cookies','1',365);
    document.getElementById("barraaceptacion").style.display="none";
}

$(document).ready(function () {
    $(window).on('scroll.myEvent', function() {
        if ($(document.body.scrollTop > 1000))
        {
			$(window).off('scroll.myEvent');
			console.log('El usuario ha hecho scroll');
			setCookie('acepta_cookies','1',365);
			document.getElementById("barraaceptacion").style.display="none";
			dataLayer.push({'event': 'cookies_aceptadas'});
        }
	});
});



</script>
<!--//FIN BLOQUE COOKIES-->