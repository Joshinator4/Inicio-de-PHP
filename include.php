<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		
		//include incluye y evalua el archivo especificado
		//embebe el código de fichero php en otro fichero php
		
		echo "Soy el primer fichero";
		
		echo "<br>";
		
		//include_once si hay 2 include del mismo archivo, solo incluirá una vez el archivo
		include_once "include2.php";
		
		echo "<br>";
		
		include_once "include2.php";
		
		//Include si no encuentra el fichero lanza un WARNING no un error
		include_once "include8.php";
		
	?>
</body>
</html>