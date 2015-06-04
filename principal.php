<?php

session_start();
echo "Bienvenido";
echo "Tu usuario es:".$_SESSION['usuario']."<br/> Tu contraseña es:".$_SESSION['contrasena']."<br/>";

//crear conexion
$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("pagfavoritos",$conexion);
//establecer consulta
$consulta = "SELECT * FROM favorito WHERE usuario='fredy' AND contrasena='12345';";
//ejecutar consulta
$resultado = mysql_query($consulta);
//imprimir consulta 
echo "<table border=1>
		<tr>
		<td>Titulo</td>
		<td>Direccion</td>
		<td>Categoria</td>
		<td>Comentario</td>
		<td>Valoracion</td>
		<td></td>
		<td></td>
		</tr>
";


while ($fila=mysql_fetch_array($resultado)) {
	echo "<tr><td>".$fila['Titulo']."</td><td>".$fila['Direccion']."</td><td>".$fila['Categoria']."</td><td>".$fila['Comentario']."</td><td>".$fila['Valoracion']."</td><td><a href='eliminarfavorito.php?Titulo=".$fila['Titulo']."&Direccion=".$fila['Direccion']."&Categoria=".$fila['Categoria']."&Comentario=".$fila['Comentario']."&Valoracion=".$fila['Valoracion']."'>Eliminar</a></td>
	<td><a href='actualizarfavorito.php?Titulo=".$fila['Titulo']."&Direccion=".$fila['Direccion']."&Categoria=".$fila['Categoria']."&Comentario=".$fila['Comentario']."&Valoracion=".$fila['Valoracion']."'>Actualizar</a></td></tr>";
}
//añadir un registro
echo "
	<tr>
	<form action='crearfavorito.php' method='POST'>
	<td><input type='text' name='titulo'></td>
	<td><input type='text' name='direccion'></td>
	<td><select name='categoria'>
	<option value='salud'>Salud</option>
	<option value='trabajo'>Trabajo</option>
	<option value='hobby'>Hobby</option>
	<option value='personal'>Personal</option>
	<option value='salud'>Salud</option>
	<option value='tecnologia'>Tecnologia</option>
	>
	</td>
	<td><input type='text' name='comentario'></td>
	<td><input type='text' name='valoracion'></td>
	<td><input type='submit'></td>
	</tr>


";
echo "</table>";
//cerrar conexion
mysql_close($conexion);
?>