<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		
		
		$num1= 5;
		$num2 = 10;
		$num3 = 5;
		$valor1 = "5";
		
		#Operadores de comparación
		//valores de comparación == === < > <= >= != !==
		//=== sea igual y del mismo tipo de variable
		if($num1 == $num2){
			echo "Num1 y Num2 son iguales"
		}
		
		if($num1 !== $num2){
			echo "Num1 y Num2 son distintos"
		}
		
		if($num1 === $valor1){
			echo "Num1 y valor1 son iguales y con el mismo tipo de variables"
		}
		
		if($num1 !== $valor1){
			echo "Num1 y valor1 no son iguales o no tienen el mismo tipo de variables"
		}
		
	?>
</body>
</html>