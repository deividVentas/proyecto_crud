<?php 

  // include_once("login.php");
  session_start();
  function recoge($var)
  {
      $tmp = (isset($_REQUEST[$var]))
          ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
          : "";
      return $tmp;
  }

  //$usuario = recoge("usuario");
  //$pass = recoge("contrasena");
  
  
  if (isset ($_POST['enviar']))
  {
  	$usuario=$_POST['usuario'];
  	$contrasena=$_POST['contrasena'];

  	if (($usuario == "alumno") and ($contrasena == "alumno"))
  	{
        echo "Usuario correcto";
        echo "<br>";
        $_SESSION['usuario']=$usuario;
        echo "<a href='proyecto_implantacion_web-master/menu.php'> Pulsa para ir a la zona privada </a>";
  	}

  	else
  	{
  		echo "Usuario incorrecto";
  		echo "<br>";
  		echo "<a href='login.php'>Pulsa para volver a intentarlo </a>";
  	}


  }
  else 
  {
  	echo "No has pulsado a enviar";
  	echo "<a href='login.php'>Para volver</a>";
  }
?>