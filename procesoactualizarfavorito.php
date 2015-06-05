<?php 

session_start();

$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("pagfavoritos",$conexion);

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

// $titulo = $_POST['Titulo'];
$titulo = $_POST['titulo'];
$direccion = $_POST['direccion'];
$categoria = $_POST['categoria'];
$comentario = $_POST['comentario'];
$valoracion = $_POST['valoracion'];

$tituloantiguo = $_SESSION['Titulo'];

mysql_query("UPDATE favorito SET Titulo='".$titulo."', Direccion='".$direccion."',
 Categoria='".$categoria."', Comentario='".$comentario."', Valoracion='".$valoracion."' WHERE Titulo='".$tituloantiguo."'");

mysql_close($conexion);

echo "
<html>
<head>
<meta http-equiv='refresh' content='0; url=principal.php'/>
</head>
</html>
";


?>