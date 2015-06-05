<?php

session_start();

$utc = date('U');
$anio = date('Y');
$mes = date('m');
$dia = date('d');
$hora = date('H');
$minuto = date('i');
$segundo = date('s');

$usuariolog = $_SESSION['usuario'];
$contrasenalog = $_SESSION['contrasena'];
@$ip=getenv(REMOTE_ADDR);
$navegador = $_SERVER["HTTP_USER_AGENT"];

$conexion = mysql_connect("localhost","fredy","fredy");
mysql_select_db("pagfavoritos",$conexion);
//consulta
mysql_query("INSERT INTO Logs (Utc, Anio, Mes, Dia, Hora, Minuto, Segundo, Ip, Navegador, Usuario, Contrasena) VALUES('$utc','$anio','$mes','$dia','$hora','$minuto','$segundo','ip','$navegador','$usuariolog','$contrasenalog')");
//cerrar 
mysql_close($conexion);


?>