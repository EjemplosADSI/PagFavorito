<?php

session_start();

$codigo = $_SESSION['Permisos'];

if ($codigo == 1) {
	
echo "Bienvenido";
echo "Tu usuario es:".$_SESSION['usuario']."<br/> Tu contraseña es:".$_SESSION['contrasena']."<br/>";

//crear conexion
$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("pagfavoritos",$conexion);
//establecer consulta
$consulta = "SELECT * FROM usuario";
//ejecutar consulta
$resultado = mysql_query($consulta);
//imprimir consulta 

echo "<table border=1>
		<tr>
		<td>Usuario</td>
		<td>Contraseña</td>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Edad</td>
		<td></td>
		<td></td>
		</tr>
";


while ($fila=mysql_fetch_array($resultado)) {
	echo "<tr><td>".$fila['Usuario']."</td><td>".$fila['Contrasena']."</td><td>".$fila['Nombre']."</td><td>".$fila['Apellido']."</td><td>".$fila['Edad']."</td><td><a href='eliminarusuario.php?usuario=".$fila['Usuario']."&contrasena=".$fila['Contrasena']."&nombre=".$fila['Nombre']."&apellido=".$fila['Apellido']."&edad=".$fila['Edad']."'>Eliminar</a></td>
	<td><a href='actualizarusuario.php?usuario=".$fila['Usuario']."&contrasena=".$fila['Contrasena']."&nombre=".$fila['Nombre']."&apellido=".$fila['Apellido']."&edad=".$fila['Edad']."'>Actualizar</a></td></tr>";
}
//añadir un registro
echo "
	<tr>
	<form action='crearusuario.php' method='POST'>
	<td><input type='text' name='usuario'></td>
	<td><input type='text' name='contrasena'></td>
	<td><input type='text' name='nombre'></td>
	<td><input type='text' name='apellido'></td>
	<td><input type='text' name='edad'></td>
	<td><input type='submit'></td>
	</tr>
";
echo "</table>";


//cerrar conexion
mysql_close($conexion);

}else{
	echo "Error. No tiene permisos de Administrador";
}
?>