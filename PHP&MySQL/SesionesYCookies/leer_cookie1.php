<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Leer cookie 1</title>
  </head>
  <body>
    <?php 

      if(isset($_COOKIE["prueba"])){
        
        echo $_COOKIE["prueba"];
        
      }else{
        
        echo "La cookie no se ha creado";
        
      }

    ?>
  </body>
</html>
