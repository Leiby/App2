<?php
	include_once('conectar.php');
    include_once('../functions/funciones.php')
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
</style>
</head>
<body>

<center>
<img src="../images/LOGO2.png" width="368" height="183"><br>
<img src="../images/combo.png" alt="ham" width="100" height="87"><br>
<form id="login" name="login" method="POST">
<section id="wen">
<p>
  <img src="../images/login.png" alt="lo" width="20" height="16">
  <input type="text" class="cajas" name="user" placeholder="Usuario"/>
  </p>
<p>
  <img src="../images/llave.png" alt="lla" width="20" height="16">
  <input type="password" class="cajas" name="pass" placeholder="Contraseña"/>
</p>
<p>&nbsp; </p>
<button type="submit" name="btEntrar" id="boton"  style="background-color: transparent">
	<img src="../functions/bo.png" width="112" height="32"/></button>
<?php
					if($_POST){	
					if(autenticar()){
					echo "<script>location.replace('menu.php')</script>";	
					}else{echo"<script>alert('Usuario o password invalidos')</script>" . "<script> javascript:document.login.user.focus() </script>";}
					}
					?>
  <a id="regis" href="registrarse.php"><img src="../images/bo.png" width="112" height="30"/></a>  </section>
</form>
<p><a href="../index.php"><img src="../images/regre.png" width="84" height="17"></a></br>
  </br>
</p>
</body>
<footer id="pie">
<img src="app.png" width="40" height="15" border="0" align="center"/>
</footer>
</html>	