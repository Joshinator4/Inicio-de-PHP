<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
				
		//estructura de control de flujo switch
		$dia = 3;
		
		switch($dia){
			
			case 1:
				echo "Lunes";
				break;
			case 2:
				echo "Martes";
				break;
			case 3:
				echo "Miercoles";
				break;
			case 4:
				echo "Jueves";
				break;
			case 5:
				echo "Viernes";
				break;
			case 6:
				echo "Sábado";
				break;
			case 7:
				echo "Domingo";
				break;
			
			default:
				echo "día no valido";
		}
		
		echo "<br>";
		
		//tambien puede comparar textos o booleanos
		$diasemana = "MIERCOLES";
		
		switch($diasemana){
			case "LUNES":
				echo 1;
				break;
			case "MARTES":
				echo 2;
				break;
			case "MIERCOLES":
				echo 3;
				break;
		}
		
	?>
</body>
</html>