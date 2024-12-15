<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		
		/*operadores logicos 
		$a and $b 
		$a or $b 
		$a xor $b 
		!$a 
		*/
		//tambien and tambien es && --- or tambien es || -- not tambien es !
		
		//xor es cuando solo una de las 2 opciones es verdad (not acepta cualquiera de las dos sea verdad)
		//not es la negación
		
		$num1 = 5;
		$num2 = 10;
		$num3 = 5;
		$activo1 = true;
		$activo2 = false;
		
		//uso del and o &&
		if($num1 == 5 && $num1 == $num3){
			echo "Dentro del primer if uso del and o && ";
		}
		
		echo "<br>";
		
		//uso del or o ||
		if($num1 == 5 || $num1 == $num2){
			echo "Dentro del segundo if uso del or o ||";
		}
		
		echo "<br>";
		
		//uso del xor si debe entrar porque solo se cumple 1 condicion -> num1==5
		if($num1 == 5 xor $num1 == $num2){
			echo "Dentro del tercer if uso del xor si debe entrar porque solo se cumple 1 condicion -> num1==5";
		}
		
		echo "<br>";
		
		//uso del not !
		if($activo1){
			echo "Dentro del cuarto if uso del not !";
		}
		
		//OPERADOR PARA STRINGS .
		echo "<br>";
		echo "Mostrando una variable con el concatenador .   =>" . $num1;
	?>
</body>
</html>