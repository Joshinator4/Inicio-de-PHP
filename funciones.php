<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		
		//sintaxis de las funciones
		function suma($parametro1, $parametro2){
			return $parametro1 + $parametro2;
		}
		
		function imprimirAlgo(){
			echo "Hola mundo!";
		}
		
		$num1 = 3;
		$resultado = suma($num1, 5);
		
		echo $resultado;
		
		echo "<br>";
		
		imprimirAlgo();

		
	?>
</body>
</html>