<?php

session_start();

$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("pagfavoritos",$conexion);

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$usuario = $_GET['usuario'];
$contrasena = $_GET['contrasena'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$edad = $_GET['edad'];

mysql_query("DELETE FROM usuario WHERE Usuario='$usuario' AND Contrasena='$contrasena' AND Nombre='$nombre' AND Apellido='$apellido' AND Edad='$edad'");

echo "
<html>
<head>
<meta http-equiv='refresh' content='0; url=gestionusuarios.php'/>
</head>
</html>
";
 mysql_close($conexion);

?>