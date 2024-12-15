<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		//definicion distintos tipos de arrays
		#array de strings
		$dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
		
		#array de enteros
		$numeros = array(10,20,30,40);
		
		#Constructor de array con numero de posiciones (vacias)en este caso 10
		$nombres = array(10);
		
		#Constructor de array vacio
		$datos = array();
		
		#Constuctor de arrays sin llamar a array()
		$valores = [10, 20, 30, 40];
		
		
		//Acceder a los elementos del array
		//var_dump muestra el tipo de variable y su contenido
		echo $dias[3];
		echo "<br>";
		var_dump ($dias);
		echo "<br>";
		var_dump ($numeros);
		
	?>
</body>
</html>