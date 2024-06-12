<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Cookie 1</title>
  </head>
  <body>
    <?php 
      setcookie("prueba", "Esta es la información de nuestra primera cookie", time()+30, "localhost/Zona de actuacion/cookie_2");
    ?>
  </body>
</html>
