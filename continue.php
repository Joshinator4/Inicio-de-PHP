<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		
		//continue hace que siga la estructura de control de flujo saltando esta iteración
		
		for($i = 1; $i <= 10; $i++ ){
			//Cuando llegue a 3 se lo va a saltar. No imprimirá el 3
			if($i == 3){
				echo "no se muestra el numero 3 porque se ha hecho un continue";
				echo "<br>";
				continue;
			}
			echo "valor de i: " . $i;
			echo "<br>";
		}
		
	?>
</body>
</html>