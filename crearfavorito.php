<?php

session_start();

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

// echo "Tu usuario es:".$_SESSION['usuario']."<br/> Tu contraseña es:".$_SESSION['contrasena']."<br/>";

$addtitulo = $_POST['titulo'];
$adddireccion = $_POST['direccion'];
$addcategoria = $_POST['categoria'];
$addcomentario = $_POST['comentario'];
$addvaloracion = $_POST['valoracion'];

//coneion 
$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("pagfavoritos",$conexion);
//consulta
mysql_query("INSERT INTO favorito (Usuario, Contrasena, Titulo, Direccion, Categoria, Comentario, Valoracion) VALUES('$usuario','$contrasena','$addtitulo','$adddireccion','$addcategoria','$addcomentario','$addvaloracion')");
//cerrar 
mysql_close($conexion);

echo "
<html>
<head>
<meta http-equiv='refresh' content='0; url=principal.php'/>
</head>
</html>
";

?>

