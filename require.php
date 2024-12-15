<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		
		//recuire incluye y evalua el archivo especificado
		//embebe el código de fichero php en otro fichero php
		//ES IGUAL QUE INCLUDE PERO LANZA ERROR FATAL
		
		echo "Soy el primer fichero";
		
		echo "<br>";
		
		//include_once si hay 2 include del mismo archivo, solo incluirá una vez el archivo
		require_once "include2.php";
		
		echo "<br>";
		
		require_once "include2.php";
		
		//require si no encuentra el fichero lanza un error fatal
		require_once "include8.php";
		
	?>
</body>
</html>