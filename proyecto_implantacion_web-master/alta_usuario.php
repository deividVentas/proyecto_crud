<?php

session_start();

if (isset ($_SESSION["usuario"]))
{

echo "<html>";
	echo "<head>";
	   echo "<title></title>";
	   echo "<meta charset='utf-8'>";
     echo "<link href='main.css' rel='stylesheet' type='text/css' >";
         
     echo "</style>";
	echo "</head>";
     
    echo "<body>";
       echo "<h1>Alta de un usuario</h1>";
       echo "<form name='Formulario' action='alta_base_de_datos.php' method='post'>";
          echo "Usuario: <input type='text' name='usuario' required><br>";
          echo "Password: <input type='password' name='password' required><br>";
          echo "Nombre: <input type='text' name='nombre'><br>";
          echo "Apellidos: <input type='text' name='apellidos'><br>";
          echo "<br>";
          echo "<input type='submit' name='guardar' value='guardar'>";
          echo "<input type='reset' name='borrar' value='borrar'>";          
        
          
    echo "</form>";
  echo "</body>";

echo "</html>";

}

else
{
    echo "Acesso no autorizado <br>";
    echo "<a href='../login.php'>Accede como es debido</a>";
}



?>