<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		
		//comparar arrays --> array_diff()
		//devuelve los valores del primer array que no estén en el segundo array
		
		$numeros1 = array(11,22,33);
		$numeros2 = array(11,33,55);
		
		//tambien lo puede hacer con arrays asociativos
		$colores1 = array("color1" => "rojo", "color2" => "verde", "color3" => "azul", "color4" => "naranja");
		$colores2 = array("color1" => "verde", "color2" => "azul", "color3" => "amarillo");
		
		$diferencias1 = array_diff($numeros1, $numeros2);
		$diferencias2 = array_diff($colores1, $colores2);
		
		//var_dump imprime el array indicando el tipo de la variable (dando información)
		var_dump($diferencias1);
		var_dump($diferencias2);
		
		//Unir arrays --> array_merge()
		//añade los elemntos del segundo array al final del primero aunque esten repetidos
		
		$array1 = array("rojo", "verde");
		$array2 = array("azul", "amarillo");
		
		$unido = array_merge($array1, $array2);
		
		//var_dump imprime el array indicando el tipo de la variable (dando información)
		var_dump($unido);
		
		
		
	?>
</body>
</html>