<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		
		//Recursividad. se usa poco
		//Una funcion se llama a sí mismo hasta llegar una base en este caso el 1
		
		function factorial($num){
			if($num == 1){
				echo 1;
				return 1;
			}else{
				echo $num . " x ";
				return $num * factorial($num-1);
			}
		}
		
		$resultado = factorial(5);
		echo " = " . $resultado;
	?>
</body>
</html>