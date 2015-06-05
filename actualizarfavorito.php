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
	<td></td>
	</tr>
";

while ($fila = mysql_fetch_array($resultado)) {
	echo "<tr><form action='procesoactualizarfavorito.php' method='post'>
	<td><input type='text' name='titulo' value='".$fila['Titulo']."'></td>
	<td><input type='text' name='direccion' value='".$fila['Direccion']."'</td>
	<td><select name='categoria'>
	<option value='salud'>Salud</option>
	<option value='trabajo'>Trabajo</option>
	<option value='hobby'>Hobby</option>
	<option value='personal'>Personal</option>
	<option value='salud'>Salud</option>
	<option value='tecnologia'>Tecnologia</option>
	<option value='".$fila['Categoria']."' Selected>".$fila['Categoria']."</option>
	</select></td>
	<td><input type='text' name='comentario' value='".$fila['Comentario']."'</td>
	<td><input type='text' name='valoracion' value='".$fila['Valoracion']."'</td>
	<td><input type='submit'></td>
	</form>
	</tr>";
}
echo "</table>";

$_SESSION['Titulo'] = $titulo;

mysql_close($conexion);

?>