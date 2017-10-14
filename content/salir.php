<?php
include ('../functions/funciones.php');
if (verificar_usuario()){
	session_unset();
	session_destroy();
	echo '<script type="text/javascript">
		location.replace("../index.php");
	  </script>';
}

?>