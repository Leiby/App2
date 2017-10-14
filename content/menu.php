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
	.art{border: 1px solid; width:35%; text-align:center; margin:0 auto;}
}
.Estilo1 {color: #FFFFFF}
.Estilo2 {
	color: #FF0000;
	font-weight: bold;
	font-size: 36px;
	font-style: italic;
}
</style>

</head>
<body>
<center>
<img src="../images/ORDENASR3.png" alt="mm" width="231" height="82"/>
<p>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="195" height="137" title="haber">
    <param name="movie" value="../images/Tu sabes cuando es Wendy's.swf">
    <param name="quality" value="high">
    <embed src="../images/Tu sabes cuando es Wendy's.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="195" height="137" ></embed>
  </object>
</p>
<p>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="141" height="32" title="BI">
    <param name="movie" value="text3.swf">
    <param name="quality" value="high">
    <embed src="text3.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="141" height="32" ></embed>
  </object>
</p>
<p> 
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="241" height="28" title="SALUDARLE">
    <param name="BGCOLOR" value="">
    <param name="BGCOLOR" value="">
    <param name="BGCOLOR" value="">
    <param name="BGCOLOR" value="">
    <param name="BGCOLOR" value="">
    <param name="BGCOLOR" value="">
    <param name="BGCOLOR" value="">
    <param name="BGCOLOR" value="">
    <param name="BGCOLOR" value="">
    <param name="movie" value="text2.swf">
    <param name="quality" value="high">
    <embed src="text2.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="241" height="28" ></embed>
  </object> 
  <span class="Estilo1">..</span> <span class="Estilo2"><?php echo $_SESSION['nombre']; ?> </span></p>
<p>
  <article class="art">
    <a href="hambur.php"> <img src="../images/hambur.png" width="77" height="47"/><br> 
    <strong>Hamburguesas </strong></a></article>
  <br>
  <article class="art">
    <a href="hambur1.php"><img src="../images/salad.png" width="78" height="49"/><br> 
    <strong>Ensaladas </strong></a></article>
  <br>
  </section>
<a href="../ingresar.php"><img src="../images/icono_volver.png" width="86" height="33"></a>
<span class="Estilo1">.......................</span>
<a href="../index.php"><img src="../images/salir.png" alt="SALIR" width="36" height="35"></a></p>
</body>
<footer id="pie">

</footer>
</html>