<?php 

//obtener variables 
session_start();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

//crearemos conexion 
$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("pagfavoritos",$conexion);

//consulta
$resultado = mysql_query("SELECT * FROM usuario;");

while ($fila = mysql_fetch_array($resultado)) {
	$usuariobasedatos = $fila['Usuario'];
	$contrasenabasedatos = $fila['Contrasena'];	

	if ($usuario == $usuariobasedatos & $contrasena == $contrasenabasedatos) {
		$_SESSION['usuario'] = $usuario;
		$_SESSION['contrasena'] = $contrasena ;

		echo "
			<html>
			<head>
			<meta http-equiv='refresh' content='0; url=principal.php'/>
			</head>
			</html>
		";
	}else{
echo "hola";

	}
}



?>