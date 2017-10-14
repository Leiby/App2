<?php
include ('../content/conectar.php');
session_start();
function autenticar() {
$sql = "SELECT * FROM usuarios WHERE usuario='" .$_POST["user"]. "' AND password='" . md5($_POST["pass"]). "'";
	$consulta=@mysql_query($sql);
	if (mysql_num_rows($consulta) != 0){
		$row = mysql_fetch_assoc($consulta);
		$_SESSION['usuario']= $row["usuario"]; 
		$_SESSION['nombre']= $row["nombre_completo"];
		return true;
	} else {
		return false;
	}
}

function verificar_usuario(){
	if ($_SESSION['usuario']){
		return true;
	}else{return false;}
}


?>