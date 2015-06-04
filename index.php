<?php
session_start();

$_SESSION['usuario'] = "Fredy";
$_SESSION['contrasena'] = "12345";

echo "
<html>
<head>
<meta http-equiv='refresh' content='0; url=principal.php'/>
</head>
</html>
";
?>