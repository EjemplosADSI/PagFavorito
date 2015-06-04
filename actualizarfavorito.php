<?php

session_start();

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$titulo = $_GET['Titulo'];
$direccion = $_GET['Direccion'];
$categoria = $_GET['Categoria'];
$comentario = $_GET['Comentario'];
$valoracion = $_GET['Valoracion'];

$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("pagfavoritos",$conexion);


$resultado = mysql_query("SELECT * FROM favorito WHERE
Usuario='".$usuario."' AND Contrasena='".$contrasena."' AND Categoria='".$categoria."' AND Comentario='".$comentario."' AND Valoracion='".$valoracion."'");

echo "<table border='1'>
	<tr>
	<td>Titulo</td>
	<td>Direccion</td>
	<td>Categoria</td>
	<td>Comentario</td>
	<td>Valoracion</td>
	</tr>
";

while ($fila = mysql_fetch_array($resultado)) {
	echo "<tr>
	<td><input type='text' name='titulo' value='".$fila['titulo']."'</td>


	</tr>";
}

?>