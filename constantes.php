<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		
		//Constatntes 2 formas de crear una constante
		//No se pueden modificar en tiempo de ejecución
		const PI = 3.141592;
		
		echo PI;
		
		define("NOMBRE", "Joshua");
		
		echo "<br>";
		
		echo NOMBRE;
		
	?>
</body>
</html>