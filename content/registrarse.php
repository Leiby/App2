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
	#wen{ width:100%; height:auto; margin:0 auto; text-align:center; border: 1px solid;}
	#pie{width:100%; height:50px; margin:50px 0 0 0;text-align:center; background-color:#FFFFFF; font-family:calibri;}
	.cajas{margin: 5px 0 0 0; width:150px; height:25px; border: 1px solid;}
	#boton{margin: 5px 0 0 35px;}
}
body {
	background-image: url(../images/image.jpg);
}
.Estilo2 {color: #855A2F}
</style>
<script>
function menu()
			{
				location.replace("cuentasusuario.php");
			}
			var letras = "abcdefghijklmnñopqrstuvwxyz";
			
			function tiene_letras()
			{
				var texto = document.modi.telefono.value;
				texto = texto.toLowerCase();
				for (i=0; i<texto.length; i++)
					{
						if (letras.indexOf(texto.charAt(i),0)!=-1)
							{
								var letra = 1;
							}
					}
				if (letra == 1)
					{
						alert("La cadena contiene letras");
						document.modi.telefono.focus();
						return;
					}
			}
function validar_contra()
		{
	var password = document.modi.contra1.value;
	var password2 = document.modi.contra2.value;
	if(password != password2)
	{
		alert("Las contraseñas no coinciden");
		document.modi.contra1.value = '';
		document.modi.contra2.value = '';
		document.modi.contra1.focus();
	}	
}
</script>
</head>
<body>

<center>
<p><br>
<img src="../images/logo.png" width="101" height="92"></p>
<p>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="179" height="28" title="CREA">
    <param name="BGCOLOR" value="">
    <param name="BGCOLOR" value="">
    <param name="BGCOLOR" value="">
    <param name="BGCOLOR" value="">
    <param name="movie" value="text1.swf">
    <param name="quality" value="high">
    <embed src="text1.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="179" height="28" ></embed>
  </object>
</p>
<form id="login" name="modi" method="POST">
  <p>
  <img src="../images/nombre.jpg" alt="nombre" width="20" height="16">
  <input type="text" class="cajas" name="nombre" placeholder="Nombre" required/>
</p>
<p>
  <img src="../images/direccion.png" alt="direccion" width="20" height="16">
  <input type="text" class="cajas" name="direccion" placeholder="Dirección" required/>
</p>
<p>
  <img src="../images/telefono.png" alt="telefono" width="20" height="16">
  <input type="text" class="cajas" name="telefono" onBlur="tiene_letras();" placeholder="Teléfono"required/>
</p>
<p>
  <img src="../images/login.png" alt="login" width="20" height="16">
  <input type="text" class="cajas" name="usuario" placeholder="Usuario"required/>
</p>
<p>
  <img src="../images/pass.png" alt="pass" width="20" height="16">
  <input type="password" class="cajas" name="contra1" placeholder="Contraseña"required/>
</p>
<p>
  <img src="../images/repass.png" alt="repass" width="20" height="16">
  <input type="password" class="cajas" name="contra2" onBlur="validar_contra();" placeholder="Repita-Contra"required/>
  </p>
<p>
  <img src="../images/correo.png" alt="correo" width="20" height="16">
  <input type="text" class="cajas" name="correo" placeholder="Correo"required/>
  <input type="hidden" class="cajas" name="salad" value="" />
</p>
<button type="submit" name="btGuardar" id="boton" ><img src="../images/registr.png" width="103" height="34"/></button>
 <span class="Estilo2">....................</span><a href="./ingresar.php"><img src="../images/icono_volver.png" width="93" height="37"></a>
 <p>&nbsp;</p>
</form>
<?php
if($_POST){
	if($_POST['contra1'] == $_POST['contra2'])
	{
	$pass = md5($_POST['contra1']);
	$sql="INSERT INTO usuarios VALUES('$_POST[nombre]','$_POST[direccion]','$_POST[telefono]','$_POST[usuario]','$pass','$_POST[correo]','$_POST[salad]')";		
	if(mysql_query($sql)){
		echo "<script>alert('Registro Almacenado Con éxito');location.replace('ingresar.php')</script>";
	}else {	echo "Error" . mysql_error();}
	}
}


?>
</section>
<br>
</body>
<footer id="pie">

</footer>
</html>