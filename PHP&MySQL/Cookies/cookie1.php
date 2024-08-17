<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Cookie 1</title>
  </head>
  <body>
    <?php 
      setcookie("prueba", "Esta es la información de nuestra primera cookie", time()+30, "/zona_contenidos/cookie_2");
    ?>
  </body>
</html>
