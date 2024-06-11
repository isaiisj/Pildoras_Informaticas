<!DOCTYPE html>
<html>
  <head>
    <title>Pagina para usuarios registrados</title>
  </head>
  <body>
    <?php 
      session_start();

      if(!isset($_SESSION["usuario"])){
        header("Location:login.php");
      }
        
    ?>

    <h1>Bienvenidos Usuarios</h1>

    <p>Esto es info para usuarios registrados</p>

    <?php 
        echo "Usuario: ".$_SESSION["usuario"]."<br>";
    ?>

    <p><a href="cierre.php">Cierre Sesión</a></p>

    <a href="usuarios_registrados1.php">Volver</a>
  </body>
</html>
