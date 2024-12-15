<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		
		//sort() modifica el array indicado ordenándolo
		//en caso de string se ordena alfabéticamente, caso numerico de menor a mayor
		$array1 = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado", "Domingo");
		echo "array de dias de la semana sin ordenar <br>" ;
		var_dump($array1);
		
		sort($array1);
		echo "array dias de la semana ordenada <br>" ;
		var_dump($array1);
		
		//rsort() modifica el array indicado ordenándolo en orden inverso
		
		rsort($array1);
		echo "array dias de la semana ordenada a la inversa<br>" ;
		var_dump($array1);
		
		//asort() ordena y mantiene la asociacion de las posiciones o keys
		//Tras ordenarlo en orden inverso, el 0 seguirá siendo viernes
		asort($array1);
		echo "array dias de la semana ordenada manteniendo las key o posiciones<br>" ;
		var_dump($array1);
		
		//ksort() ordena por las claves o posiciones
		//en el caso de $numeros no cambia nada
		$numeros = array(10,11,8,103,99,54);
		echo "array de numeros ordenado (no cambia nada) <br>" ;
		ksort($numeros);
		var_dump($numeros);
		
		
		//en el caso de un array asociativo cambiará las keys si estas están desordenadas
		$nombres = array("Javier" => 29, "Patricia" => 18, "Emilio" => 26);
		echo "array de nombres sin ordenar <br>" ;
		var_dump($nombres);
		ksort($nombres);
		echo "array de nombres odenado <br>" ;
		var_dump($nombres);
		
		//shuffle() crea un orden aleatorio en los valores manteniendo el orden de las claves
		//cada vez que se lance generará un orden diferente aleatorio
		$numeros2 = array(10,5,72,31,0);
		echo "array de numeros 2 sin usar shuffle() <br>" ;
		var_dump($numeros2);
		
		echo "array de numeros 2 usando shuffle() <br>" ;
		shuffle($numeros2);
		var_dump($numeros2);
		
		
	?>
</body>
</html>