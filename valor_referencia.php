<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		
		//Valor y Referencia
		
		//Valor si el valor cambia no afecta al original porque se le pasa una copia
		
		function funcion_valor($num1){
			$num1 = $num1 +2;
		}
		
		//Referencia se le pasa la propia variable original cambiando el valor original si se cambia
		
		function funcion_referencia(&$num1){
			$num1 = $num1 +3;
		}
		
		//Las variables se deben declarar despues de las funciones
		//Las funciones se declaran lo primero en el código
		$num1 = 4;
		
		//esto no modifica la variable original, mostrará 4
		funcion_valor($num1);
		echo $num1;
		
		echo "<br>";
		//esto modificará la variable original, mostrará 7
		//Al llamar a la funcion no se le pone & en la variable, solo en la definición
		funcion_referencia($num1);
		
		echo $num1;
		
		echo "<br>";
		
	?>
</body>
</html>