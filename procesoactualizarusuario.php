
<?php 

session_start();

$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("pagfavoritos",$conexion);

$usuarioantiguo = $_SESSION['Usuario'];
// $titulo = $_POST['Titulo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];

$tituloantiguo = $_SESSION['Titulo'];

mysql_query("UPDATE usuario SET Usuario='$usuario', Contrasena='$contrasena', Nombre='$nombre', Apellido='$apellido', Edad='$edad' WHERE Usuario='$usuarioantiguo'");

mysql_close($conexion);

echo "
<html>
<head>
<meta http-equiv='refresh' content='0; url=gestionusuarios.php'/>
</head>
</html>
";


?>