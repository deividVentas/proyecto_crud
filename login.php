<?php 
session_start();
session_destroy();
?>
<html>
	<head>
	    <meta charset="utf-8">
		<title>Login</title>
		<link href="proyecto_implantacion_web-master/main.css" rel="stylesheet" type="text/css" >
	</head>



	<body>
		<h1>Protectómetro</h1>
		<form name="login" method="POST" action="validacion_login.php">
		   Usuario: <input type="text" name="usuario">
		   <br>
		   Contraseña: <input type="password" name="contrasena">
		   <br>
		   <br>
		   <br>
		   <input type="submit" name="enviar" value="enviar">
		</form>
	</body>
</html>
