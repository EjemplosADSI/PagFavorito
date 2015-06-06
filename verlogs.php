<?php

session_start();

$codigo = $_SESSION['Permisos'];

if ($codigo == 1) {
	
echo "Bienvenido";
echo "Tu usuario es:".$_SESSION['usuario']."<br/> Tu contraseña es:".$_SESSION['contrasena']."<br/>";

//crear resumen de visitas
$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("pagfavoritos",$conexion);
$consultaLogs = mysql_query("SELECT * FROM logs");

$hora0 = 0; $hora1 = 0; $hora2 = 0;
$hora3 = 0; $hora4 = 0; $hora5 = 0;
$hora6 = 0; $hora7 = 0; $hora8 = 0;
$hora9 = 0; $hora10 = 0; $hora11 = 0;
$hora12 = 0; $hora13 = 0; $hora14 = 0;
$hora15 = 0; $hora16 = 0; $hora17 = 0;
$hora18 = 0; $hora19 = 0; $hora20 = 0;
$hora21 = 0; $hora22 = 0; $hora23 = 0; $hora24 = 0;

while ($fila = mysql_fetch_array($consultaLogs)) {
	if ($fila['Hora'] == 0) {
		$hora0++;
	}
	if ($fila['Hora'] == 1) {
		$hora1++;
	}
	if ($fila['Hora'] == 2) {
		$hora2++;
	}
	if ($fila['Hora'] == 3) {
		$hora3++;
	}
	if ($fila['Hora'] == 4) {
		$hora4++;
	}
	if ($fila['Hora'] == 5) {
		$hora5++;
	}
	if ($fila['Hora'] == 6) {
		$hora6++;
	}
	if ($fila['Hora'] == 7) {
		$hora7++;
	}
	if ($fila['Hora'] == 8) {
		$hora8++;
	}
	if ($fila['Hora'] == 9) {
		$hora9++;
	}
	if ($fila['Hora'] == 10) {
		$hora10++;
	}
	if ($fila['Hora'] == 11) {
		$hora11++;
	}
	if ($fila['Hora'] == 12) {
		$hora12++;
	}
	if ($fila['Hora'] == 13) {
		$hora13++;
	}
	if ($fila['Hora'] == 14) {
		$hora14++;
	}
	if ($fila['Hora'] == 15) {
		$hora15++;
	}
	if ($fila['Hora'] == 16) {
		$hora16++;
	}
	if ($fila['Hora'] == 17) {
		$hora17++;
	}
	if ($fila['Hora'] == 18) {
		$hora18++;
	}
	if ($fila['Hora'] == 19) {
		$hora19++;
	}
	if ($fila['Hora'] == 20) {
		$hora20++;
	}
	if ($fila['Hora'] == 21) {
		$hora21++;
	}
	if ($fila['Hora'] == 22) {
		$hora22++;
	}
	if ($fila['Hora'] == 23) {
		$hora23++;
	}
	if ($fila['Hora'] == 24) {
		$hora24++;
	}

}
	// echo "<br/>";
	// echo "Visitas en la hora 0:".$hora0."<br/>";
	// echo "Visitas en la hora 1:".$hora1."<br/>";
	// echo "Visitas en la hora 2:".$hora2."<br/>";
	// echo "Visitas en la hora 3:".$hora3."<br/>";
	// echo "Visitas en la hora 4:".$hora4."<br/>";
	// echo "Visitas en la hora 5:".$hora5."<br/>";
	// echo "Visitas en la hora 6:".$hora6."<br/>";
	// echo "Visitas en la hora 7:".$hora7."<br/>";
	// echo "Visitas en la hora 8:".$hora8."<br/>";
	// echo "Visitas en la hora 9:".$hora9."<br/>";
	// echo "Visitas en la hora 10:".$hora10."<br/>";
	// echo "Visitas en la hora 11:".$hora11."<br/>";
	// echo "Visitas en la hora 12:".$hora12."<br/>";
	// echo "Visitas en la hora 13:".$hora13."<br/>";
	// echo "Visitas en la hora 14:".$hora14."<br/>";
	// echo "Visitas en la hora 15:".$hora15."<br/>";
	// echo "Visitas en la hora 16:".$hora16."<br/>";
	// echo "Visitas en la hora 17:".$hora17."<br/>";
	// echo "Visitas en la hora 18:".$hora18."<br/>";
	// echo "Visitas en la hora 19:".$hora19."<br/>";
	// echo "Visitas en la hora 20:".$hora20."<br/>";
	// echo "Visitas en la hora 21:".$hora21."<br/>";
	// echo "Visitas en la hora 22:".$hora22."<br/>";
	// echo "Visitas en la hora 23:".$hora23."<br/>";
	// echo "Visitas en la hora 24:".$hora24."<br/>";

	$anchura = "20";
	$multiplicador = "5";
	$dosfase = "1";
	echo "<br/>Visitas del Dia de HOY";
	echo "<table border='1' valign='bottom'>
	<tr valign='bottom'>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora0+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora1+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora2+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora3+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora4+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora5+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora6+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora7+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora8+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora9+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora10+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora11+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora12+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora13+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora14+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora15+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora16+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora17+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora18+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora19+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora20+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora21+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora22+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora23+$dosfase)).'></td>
		<td><img src='img/square.png' width='.$anchura.' heigth='.($multiplicador*($hora24+$dosfase)).'></td>
	</tr>
	<tr>
	<td>0</td>
	<td>1</td>
	<td>2</td>
	<td>3</td>
	<td>4</td>
	<td>5</td>
	<td>6</td>
	<td>7</td>
	<td>8</td>
	<td>9</td>
	<td>10</td>
	<td>11</td>
	<td>12</td>
	<td>13</td>
	<td>14</td>
	<td>15</td>
	<td>16</td>
	<td>17</td>
	<td>18</td>
	<td>19</td>
	<td>20</td>
	<td>21</td>
	<td>22</td>
	<td>23</td>
	<td>24</td>
	</tr>
	</table>
	";


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