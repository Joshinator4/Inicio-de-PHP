<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		
		//Predefinidas 
		
		$numero = 33;
		
		//Con la variable Predefinida _SERVER se accede a los atributos que tiene definidos
		//se muestra el nombre del servidor (localhost) 
		echo "Nombre del servidor ". $_SERVER['SERVER_NAME'];
		echo "<br>";
		//Se muestra el software del servidor (apache2 php) 
		echo "Nombre del servidor ". $_SERVER['SERVER_SOFTWARE'];
		echo "<br>";
		//se muestra el puerto del servidor
		echo "Nombre del servidor ". $_SERVER['SERVER_PORT'];
		
		//Con la variable Predefinida GLOBALS se busca el nombre de la variable globales definidas
		echo "La variable definida como numero tiene el valor " . $GLOBALS['numero'];
		
		//EXISTEN
		$_COOKIE;
		$_GET;
		$_REQUEST;
		$_SERVER;
		$E_NV;
		$GLOBALS;
		$_POST;
		$_SESSION;
		
		
	?>
</body>
</html>