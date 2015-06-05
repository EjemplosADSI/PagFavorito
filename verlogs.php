<?php

session_start();

$codigo = $_SESSION['Permisos'];

if ($codigo == 1) {
	
echo "Bienvenido";
echo "Tu usuario es:".$_SESSION['usuario']."<br/> Tu contraseña es:".$_SESSION['contrasena']."<br/>";

//crear resumen de visitas
$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("pagfavoritos",$conexion);
$consulta = "SELECT * FROM logs";

$hora0 = 0; 

mysql_close($conexion);
//crear conexion
$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("pagfavoritos",$conexion);
//establecer consulta
$consulta = "SELECT * FROM logs";
//ejecutar consulta
$resultado = mysql_query($consulta);
//imprimir consulta 

echo "<table border=1>
		<tr>
		<td>Marca de Tiempo</td>
		<td>Año</td>
		<td>Mes</td>
		<td>Dia</td>
		<td>Hora</td>
		<td>Minuto</td>
		<td>Segundo</td>
		<td>IP</td>
		<td>Navegador</td>
		<td>Usuario</td>
		<td>Contraseña</td>
		</tr>
";


while ($fila=mysql_fetch_array($resultado)) {
	echo "<tr><td>".$fila['Utc']."</td><td>".$fila['Anio']."</td><td>".$fila['Mes']."</td><td>".$fila['Dia']."</td>
	<td>".$fila['Hora']."</td><td>".$fila['Minuto']."</td><td>".$fila['Segundo']."</td><td>".$fila['Ip']."</td>
	<td>".$fila['Navegador']."</td><td>".$fila['Usuario']."</td><td>".$fila['Contrasena']."</td></tr>";
}
//añadir un registro

//cerrar conexion
mysql_close($conexion);

}else{
	echo "Error. No tiene permisos de Administrador";
}
?>