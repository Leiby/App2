<?php
	include('content/conectar.php');
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
}
</style>
<script type="text/javascript">
	function accion(n)
		{
		if(n==0){
			location.replace("content/ingresar.php");	
		}
	}   
    </script>
</head>
<body>
<section id="wen">
<center>
<img src="images/pruebita.png" width="300" height="150">
<br>
<img src="images/cama.gif" width="98" height="163"/>
<a href="content/ingresar.php"><img src="images/ordenar.png" width="136" height="92" border="0" align="bottom"/></a><br>

<p>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="166" height="28">
    <param name="movie" value="text1.swf">
    <param name="quality" value="high">
    <embed src="text1.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="166" height="28" ></embed>
  </object>
</p>
<p>

  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24" title="w">
    <param name="BGCOLOR" value="">
    <param name="movie" value="button1.swf">
    <param name="quality" value="high">
    <embed src="button1.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
  </object>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24" title="sair">
    <param name="BGCOLOR" value="">
    <param name="movie" value="button2.swf">
    <param name="quality" value="high">
    <embed src="button2.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
  </object>
</p>
<p>&nbsp;</p>
</center>
</section>
</body>
<footer id="pie">
<center><a href="content/ingresar.php"><img src="images/app.png" width="50" height="25" border="0" align="center"/></a></center><br>
</footer>
</html>