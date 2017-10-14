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
.Estilo1 {
	color: #FF0000;
	font-size: 24px;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.Estilo2 {color: #FFFFFF}
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
<form name="hamburguesa" method="post" action="pagar.php">
<img src="../images/gracias.png" alt="gracias" width="272" height="184">

<header id="cabe">
  <h1>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="277" height="36" title="PE">
      <param name="BGCOLOR" value="">
        <param name="BGCOLOR" value="">
        <param name="BGCOLOR" value="">
        <param name="movie" value="text6.swf">
        <param name="quality" value="high">
      <embed src="text6.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="277" height="36" ></embed>
    </object>
  </h1>
  </header>

<img src="../images/tarjeta.jpg" width="195" height="126"/>
<section id="wen">
<p>
  <article class="art"></article><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="258" height="34" title="c">
    <param name="BGCOLOR" value="">
    <param name="BGCOLOR" value="">
    <param name="movie" value="text9.swf">
    <param name="quality" value="high">
    <embed src="text9.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="258" height="34" ></embed>
  </object><br>
  <span class="Estilo1"><?php
	
	
	
$cadena=$_SESSION["combo"];


echo $cadena;


?></span></p>
<button type="submit" name="btEntrar" id="boton">
	<img src="../images/pro.png" width="112" height="34"/></button>
<p><a href="menu.php"><img src="../images/icono_volver.png" width="86" height="33" alt="vol"></a><span class="Estilo2"><span class="Estilo2">....................................</span><a href="./hambur.php"><img src="../images/salir.png" alt="sa" width="36" height="35"></a></span>.</p
>
</section>




</form>
</body>
<footer id="pie">

</footer>



</html>