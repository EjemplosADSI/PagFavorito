<?php

session_start();

$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("pagfavoritos",$conexion);

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];


$titulo = $_GET['Titulo'];
$direccion = $_GET['Direccion'];
$categoria = $_GET['Categoria'];
$comentario=$_GET['Comentario'];
$valoracion=$_GET['Valoracion'];

mysql_query("DELETE FROM favorito WHERE Usuario='".$usuario."' AND Contrasena='".$contrasena."' AND Titulo='".$titulo."' AND Direccion='".$direccion."' AND Categoria='".$categoria."' AND Comentario='".$comentario."' AND Valoracion='".$valoracion."'");

echo "
<html>
<head>
<meta http-equiv='refresh' content='0; url=principal.php'/>
</head>
</html>
";
mysql_close($conexion);



?>