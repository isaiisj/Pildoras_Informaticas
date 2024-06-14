<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
	
	table {
		width: 300px;
		margin: auto;
		background-color: #ffc;
		border: 2px solid #f00;
		padding: 5px;
	}

	td {
		text-align: center;
	}
    
	</style>

  
</head>
<body>

	<form action="pagina_busqueda_pdo.php" method="post">
		<label>Sección: </label> <input type="text" name="seccion"></br>
		<label> P origen: </label><input type="text" name="p_orig"><br>
		<input type="submit" name="enviando" value="Dale!">
	
	</form>
</body>
  
</html>
