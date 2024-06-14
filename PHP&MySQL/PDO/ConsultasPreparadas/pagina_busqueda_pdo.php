<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
</head>
<body>
  
<?php

	$busqueda= $_GET["buscar"];

	
	try {

		$base=new PDO('mysql::host=localhost; dbname=pruebas', 'root', '');

		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$base->exec("SET CHARACTER SET UTF8");

		$sql="SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE NOMBREARTÍCULO = ?";

		$resultado=$base->prepare($sql);

		$resultado->execute(array("Tubos"));

		while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
			
			echo "Nombre Artículo:" . $registro['NOMBREARTÍCULO'] . " Sección: " . $registro["SECCIÓN"] . " Precio: " . $registro["PRECIO"] . " País de Origen: " . $registro["PAÍSDEORIGEN"] . "<br>";
		}

		$resultado->closeCursor();


	}catch(Exception $e) {

		//die('Error: ' . $e->GetMessage());

		echo "Línea del error: " . $e->getLine();

	} finally {

		$base=null;
	}

?>
</body>
</html>
