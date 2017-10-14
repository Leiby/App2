<?php
	include('conectar.php');
	include('../functions/funciones.php')
?>
<!DOCTYPE HTML>
<html>
<head>
<title>WendysApp </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
@media screen and (max-width:481px)
{
	#wen{ width:100%; height:auto; margin:0 auto; text-align:center;}
	#pie{width:100%; height:50px; margin:50px 0 0 0;text-align:center; background-color:#FFFFFF; font-family:calibri;}
	.cajas{margin: 5px 0 0 0; width:150px; height:25px; border: 1px solid;}
	#boton{margin: 5px 0 0 35px;}
	.art{border: 1px solid; width:100%; height: auto; text-align:left; margin:0 auto;}
	#cabe{width:100%; height:37px; margin:0 auto; text-align:center; background-color:black; color:white;}
}
.Estilo2 {color: #FFFFFF}
body {
	background-image: url(../images/image.jpg);
}
.Estilo3 {color: #795229}
.Estilo4 {color: #845A30}
.Estilo5 {color: #8F683F}
.Estilo6 {color: #7F5C34}
</style>
<script type="text/javascript">
	function accion(n)
		{
		if(n==0){
			location.replace("pagar.php");	
		}
	}   
    </script>
</head>
<body>

<center>
<header id="cabe"><h1>
  <img src="../images/Logo.png" alt="lo" width="157" height="161">
  </h1>
  <h1>	
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="432" height="28" title="S">
      <param name="movie" value="text10.swf">
      <param name="quality" value="high">
      <embed src="text10.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="432" height="28" ></embed>
      </object>
  </h1>
  <h1><img src="../images/tarjetas-credito.jpg" width="150" height="100"/>  </h1>
</header>
<section id="wen">
  <article class="art"></article>
<p align="center"><span class="Estilo2"><span class="Estilo5">.</span> <img src="../images/tc1.png" alt="tc" width="33" height="32"></span>
  <select name="select">
    <option>elija una opcion</option>
    <option>VISA</option>
    <option>MASTERCARD-----------</option>
  </select></p>
<p align="center">	  <label> <span class="Estilo2"><span class="Estilo4">...</span> <img src="../images/png.png" alt="paguito" width="32" height="33">
    <input type="text" class="cajas" name="nombre" placeholder="****-****-****-4850" required/>
  </span></label>
</p>
<p align="center"><span class="Estilo2"><span class="Estilo3">....</span><img src="../images/calendar.png" alt="ca" width="32" height="33"></span>
  <input type="text" class="cajas" name="nombre2" placeholder="00/000" required/>
</p>
<p align="center">&nbsp;</p>






<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="RR3QZNH5BACXY">
<input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>










 <p><a href="salir.php"><img src="../images/cancelar.png" alt="can" width="120" height="32" border="0"></a> </p>
 <p>&nbsp;</p>
<p>&nbsp;</p>
</section>
</body>
<footer id="pie">

</footer>
</html>