<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		
		//break saca la ejecución de la estructura de control de flujo
		//puede salir de 1 o mas estructuras control de flujo
		for($i = 1; $i <= 10; $i++ ){
			echo "valor de i: " . $i;
			echo "<br>";
			if($i == 3){
				break;
			}
		}
		
		for($j = 1; $j <= 10; $j++ ){
			echo "valor de j: " . $j;
			echo "<br>";
			for($k = 1; $k <= 10; $k++ ){
				echo "valor de k: " . $k;
				echo "<br>";
				if($k == 3){
					//Si ponemos break 2 se sale de los 2 bucles, si no se pone nada sale solo de 1
					break 2;
				}
			}
		}
		
	?>
</body>
</html>