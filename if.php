<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		
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
		
	?>
</body>
</html>