<?php

session_start();

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$usuario = $_GET['usuario'];
$contrasena = $_GET['contrasena'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$edad = $_GET['edad'];

$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("pagfavoritos",$conexion);


$resultado = mysql_query("SELECT * FROM usuario WHERE
Usuario='".$usuario."' AND Contrasena='".$contrasena."' AND Nombre='".$nombre."' AND Apellido='".$apellido."' AND Edad='".$edad."'");

echo "<table border='1'>
	<tr>
	<td>Usuario</td>
	<td>Contraseña</td>
	<td>Nombre</td>
	<td>Apellido</td>
	<td>Edad</td>
	<td></td>
	</tr>
";

while ($fila = mysql_fetch_array($resultado)) {
	echo "<tr><form action='procesoactualizarusuario.php' method='post'>
	<td><input type='text' name='usuario' value='".$fila['Usuario']."'></td>
	<td><input type='text' name='contrasena' value='".$fila['Contrasena']."'</td>
	<td><input type='text' name='nombre' value='".$fila['Nombre']."'</td>
	<td><input type='text' name='apellido' value='".$fila['Apellido']."'</td>
	<td><input type='text' name='edad' value='".$fila['Edad']."'</td>
	<td><input type='submit'></td>
	</form>
	</tr>";
}
echo "</table>";

$_SESSION['Usuario'] = $usuario;

mysql_close($conexion);

?>