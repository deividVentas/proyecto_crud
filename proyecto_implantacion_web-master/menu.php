<?php

session_start();

if (isset ($_SESSION["usuario"]))
{
  echo "<html>";
  echo "<head>";
    echo "<title> Menu </title>";
    echo "<meta charset='utf8'>";
  echo "</head>";
  
  echo "<body>";
      echo "<table>";
        echo "<tr>";
          echo "<td><img src='icono.png' width='100px' height='100px'></td>";
          echo "<td> <h1>Gestión de usarios de protectómetro</h1></td>";
        echo "</tr>";
      echo "</table>";
      echo "<br>";
      
      echo "<a href='alta_usuario.php'>Alta de un usuario</a><br>";
      echo "<br>";
      echo "<a href='formulario_borrar_usuario.php'>Borrado de un usuario</a><br>";
      echo "<br>";
      echo "<a href='lista_usuario.php'>Listado de todos los usuario</a><br>";
      echo "<br>";
      echo "<a href='borrar_todos_usuarios.php'>Borrado de todos los usuario</a><br>";
      echo "<br>";
      echo "<a href='editar.php'>Edición un usuario</a>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<a href='../login.php'>Cerrar sesion</a>";

  echo "</body>";
echo "</html>";
}

else
{
    echo "Acesso no autorizado <br>";
    echo "<a href='../login.php'>Accede como es debido</a>";
}



?>


