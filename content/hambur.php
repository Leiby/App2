<?php
	include('conectar.php');
	include('../functions/funciones.php')
?>
<!DOCTYPE HTML>
<html>
<head>
<title>WendysApp </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>



<script>
	function accion(n)
		{
		if(n==0){
			location.replace("orden.php");	
		}
	}   
    </script>
<style type="text/css">
<!--
.Estilo1 {font-size: 18px}
.Estilo2 {color: #FFFFFF}
-->
</style>
</head>
<body>

	<center>
<header id="cabe">
  <h1><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="274" height="53" title="MENU">
      <param name="movie" value="text5.swf">
      <param name="quality" value="high">
      <embed src="text5.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="274" height="53" ></embed>
    </object>
  </h1> 
</header>

<p><img src="../images/BIENVENIDOS.png" alt="bien" width="275" height="108">
  <section id="wen">
</p>
<form name="hamburguesa" method="post">
  <article class="art Estilo1">
  <div align="center"><strong><?php if (isset($combo1) && $gender=="6.75") echo "checked";?>
      <input type="radio" name="combo" value="Big Bacon $6.75" id="combo1"> 
    Big Bacon--------$6.75<br>
 
	
	<?php if (isset($combo2) && $gender=="6.25") echo "checked";?>
	
    <input type="radio" name="combo" value="Baconator $6.25" id="combo2"> 
    Baconator--------$6.25<br>
	

	
    <?php if (isset($combo3) && $gender=="6.25") echo "checked";?>
    <input type="radio" name="combo" value="Melt $6.25" id="combo3"> 
    Melt---------------$6.25<br>
    <?php if (isset($combo4) && $gender=="7.25") echo "checked";?>
     <input type="radio" name="combo" value="Doble $7.25" id="combo4"> 
    Doble--------------$7.25
	</strong>	</div>
</article>
<p>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="345" height="34" title="combo">
    <param name="movie" value="text4.swf">
    <param name="quality" value="high">
    <embed src="text4.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="345" height="34" ></embed>
  </object>
</p>
<p><img src="../images/co.png" width="162" height="124"/></p>

<button type="submit" name="btEntrar" id="boton" ><img src="../images/pro.png" width="112" height="34"/></button>
<p><a href="menu.php"><img src="../images/icono_volver.png" width="86" height="33" alt="vol"></a><span class="Estilo2">....................................<a href="./ingresar.php"><img src="../images/salir.png" alt="sa" width="36" height="35"></a></span>.</p>
<p>&nbsp;</p>


<?php
if($_POST){
	
	
	$combo1 = $combo1 + 1;
	$combo = $_POST['combo'];
	
	$sql="INSERT INTO pago VALUES('$combo','1')";	
	if(mysql_query($sql)){
			echo "<script>	location.replace('orden.php')</script>";
	}else {	echo "Error" . mysql_error();}
	}
	
	session_start();
$_SESSION["combo"]=$_POST["combo"];
return;

?>


</form>

</section>
</body>
<footer id="pie">

</footer>
</html>