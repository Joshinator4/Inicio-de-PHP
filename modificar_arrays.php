<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		//Funciones para modificar arrays
		
		//array_shift() quita el primer elemento del array y lo devuelve
		$frutas = ["naranja", "plátano", "manzana", "frambuesa"];
		echo "Mostrando el array frutas sin modificar";
		var_dump($frutas);
		
		echo "Mostrando el array frutas habiendo eliminado el primer elemento";
		$eliminado = array_shift($frutas);
		var_dump($frutas);
		echo "Mostrando el elemento eliminado del array frutas ==>  " . $eliminado;
		echo "<br>";
		
		
		//array_unshift() agrega el elemento a la  primera posicion del array y devuelve el numero de elementos que tiene el array
		echo "Mostrando el array frutas habiendo metido el elemento en la primera posición";
		#2 parametros, 1º array en el cual insertar el elemento, 2º el elemento
		array_unshift($frutas, "pera");	
		var_dump($frutas);
		
		
		//array_pop() elimina el ultimo elemento del array
		echo "Mostrando el array frutas eiminando el último elemento";
		$eliminado = array_pop($frutas);
		var_dump($frutas);
		echo "Mostrando el elemento eliminado del array frutas con pop()==>  " . $eliminado;
		echo "<br>";
		echo "<br>";
		
		//array_push() inserta el elementoen la última posición del array
		echo "Mostrando el array frutas añadiendo un elemento a la última posición";
		array_push($frutas, "piña");
		var_dump($frutas);
		
		
	?>
</body>
</html>