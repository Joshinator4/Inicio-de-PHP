<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		//variable global
		$num = 22;
		echo $num;
		//variable local dentro de la funcion
		function prueba(){
			$valor = 10;
			echo $valor;
		}
		//llamada al metodo
		prueba();
		
		$valor2 = 15; 
		
		//se puede acceder al valor de una funcion global con la palbra reservada global
		function prueba2(){
			global $valor2, $num;
			$valor3 = $valor2 + $num;
			echo $valor3;
		}
		
		prueba2();
		
	?>
</body>
</html>