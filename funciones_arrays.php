<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
	
		//Funciones para arrays ineteresantes
		
		$frutas = array("naranja", "plátano", "manzana", "frambuesa");
		
		//count(array) devuelve el numero de elmentos del array
		echo "mostrando la cantidad de elementos del array1 ==>  " . count($frutas);
		echo "<br>";
		
		//current(array) muestra el elemento que esta apuntando el puntero
		echo "Mostrando el elemento al que apunta el puntero actualmente con current()==>  " . current($frutas);
		echo "<br>";
		
		//end(array) mueve el puntero al último elemento del array
		echo "Mostrando el ultimo elemento del array moviendo el puntero usando end()==>  " . end($frutas);
		echo "<br>";
		
		//reset(array) vuelve a poner el puntero en el primer elemento del array
		//esto se usa para resetear el puntero despues de usar funciones que han modificado el array como arra_pop(), array_shift()...
		echo "Mostrando el puntero reseteado usando reset()==>  " . reset($frutas);
		echo "<br>";
		
		//array_search(elemntoBuscar, array) busca un elemento en el array devolviendo el key o posición
		//Atención no devuelve el elemento!!
		$meses = [0 => "Enero", 1 => "Febrero", 2 => "Marzo", 3 => "Abril"];
		$clave = array_search("Febrero", $meses);
		
		if($clave){
			echo "Mostrando la posición del elemento buscado con array_search() ==>  " . $clave;
		}else{
			echo "Elemnto no encontrado";
		}
		
	?>
</body>
</html>