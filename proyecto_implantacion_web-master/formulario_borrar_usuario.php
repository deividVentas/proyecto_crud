<?php

session_start();

if (isset ($_SESSION["usuario"]))
{
 echo "<html>";
	echo "<head>";
	   echo "<title></title>";
	   echo "<meta charset='utf-8'>";
     echo "<link href='main.css' rel='stylesheet' type='text/css' >";;
	echo "</head>";
     
    echo "<body>";
       echo "<h1>Dar de baja a un usuario</h1>";
       echo "<form name='Formulario' action='borrado_de_los_usuarios.php' method=post'>";
          echo "Usuario: <input type='text' name='usuario' required><br>";
          
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