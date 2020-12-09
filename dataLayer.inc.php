<?php


if(strpos($_SERVER['REQUEST_URI'], '/form.php') !== false || strpos($_SERVER['REQUEST_URI'], '/ajaxform.php') !== false || strpos($_SERVER['REQUEST_URI'], '/register.php') !== false) {
  define('PAGE_TYPE', 'Form');
} else {
  define('PAGE_TYPE', 'Normal');
}

?>


<script>
	var dataLayer = (typeof dataLayer !== 'undefined') ? dataLayer : [];

	dataLayer.push({
		'userId' : '<?php echo USER_ID;?>', 
		'user_cohort' : '<?php echo USER_COHORT;?>',
		'user_name': '<?php echo USER_NAME;?>',
		'user_login': '<?php echo USER_LOGIN;?>',
		'user_age': '<?php echo USER_AGE;?>',
		'user_bin': '<?php echo USER_BIN;?>',
		'user_segment': '<?php echo USER_SEGMENT;?>',
		'user_last_login': '<?php echo USER_LAST_ACCESS;?>',
		'pageTemplate': '<?php echo PAGE_TYPE;?>',
		'contentGroup1': 'Landings'
	});
</script>


<?php

if(strpos($_SERVER['REQUEST_URI'], '/order_received.php') !== false) { 
?>
<script>

dataLayer.push({
  'ecommerce': {
    'purchase': {
      'actionField': {
        'id': 'T12345',                         // Transaction ID. Required for purchases and refunds.
        'affiliation': 'Online Store',
        'revenue': '35.43',                     // Total transaction value (incl. tax and shipping)
        'tax':'4.90',
        'shipping': '5.99',
        'coupon': 'SUMMER_SALE'
      },
      'products': [{                            // List of productFieldObjects.
        'name': 'Triblend Android T-Shirt',     // Name or ID is required.
        'id': '12345',
        'price': '15.25',
        'brand': 'Google',
        'category': 'Apparel',
        'variant': 'Gray',
        'quantity': 1,
        'coupon': ''                            // Optional fields may be omitted or set to empty string.
       },
       {
        'name': 'Donut Friday Scented T-Shirt',
        'id': '67890',
        'price': '33.75',
        'brand': 'Google',
        'category': 'Apparel',
        'variant': 'Black',
        'quantity': 1
       }]
    }
  }
});
</script>

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




</script>
<!--//FIN BLOQUE COOKIES-->
   