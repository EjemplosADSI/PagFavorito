<?php

session_start();

$codigo = $_SESSION['Permisos'];

if ($codigo == 1) {
	echo "Pulsa <a href='verlogs.php'>AQUI</a> para ver los logs<br/>";
	echo "Pulsa <a href='gestionusuarios.php'>AQUI</a> para ver gestion de usuarios";
}else{
	echo "
<html>
<head>
<meta http-equiv='refresh' content='0; url=index.php'/>
</head>
</html>
";
}

?>