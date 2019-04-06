<?php 

session_start();
include 'conexion.php';

if (isset($_SESSION['user'])) { ?>
<!DOCTYPE html>
<html>
<head>
	<title>DASHBORARD</title>
	<meta charset="utf-8">
</head>
<body>
		<h1>Bienvenido al panel de control</h1>
		<a href="logout.php"><button>Salir de la sesión</button></a>
</body>
</html>
	
<?php
}
else{
	echo '<script>window.location="index.php"; </script>';
}


 ?>