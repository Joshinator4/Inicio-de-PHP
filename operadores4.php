<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		
		//Operadores de pre-incremento o pre-decremento
		#primero incrementan o decrementan y luego dan el valor
		
		$num1 = 5;
		$num2 = 10;
		echo "Mostrando valores antes y despues de pre-incrementar y pre-decrementar";
		echo "<br>";
		echo $num1;
		echo "<br>";
		//incrementa antes de mostrarlo
		echo ++$num1;
		echo "<br>";
		
		echo $num2;
		echo "<br>";
		
		echo --$num2;
		echo "<br>";
		
		//Operadores de post-incremento o post-decremento
		#incrementan o decrementan tras dar el valor
		$num1 = 5;
		$num2 = 10;
		
		echo "Mostrando valores antes y despues de post-incrementar y post-decrementar";
		echo "<br>";
		echo $num1;
		echo "<br>";
		//incrementa antes de mostrarlo
		echo $num1++;
		echo "<br>";
		echo $num1;
		echo "<br>";
		
		echo $num2;
		echo "<br>";
		
		echo $num2--;
		echo "<br>";
		echo $num2;
	?>
</body>
</html>