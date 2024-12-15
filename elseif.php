<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		
		$valor1 = 2;
		$valor2 = 2;
		$dia = 2;
		
		//EStructura de control de fluj elseif
		
		if($valor1 > $valor2){
			echo "valor1 es mayor que valor2 ";
			echo "<br>";
		}elseif($valor1 == $valor2){
			echo "valor1 es igual que valor2 ";
			echo "<br>";
		}else{
			echo "valor1 es menor que valor2 ";
			echo "<br>";
		}
		
		if($dia == 1){
			echo "Lunes";
		}elseif($dia == 2){
			echo "Martes";
		}elseif($dia == 3){
			echo "Miércoles";
		}
		
	?>
</body>
</html>