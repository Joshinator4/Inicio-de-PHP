<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
	
		//funciones para usar con fechas y horas
		//comportamiento definido en el archivo php.ini con una longitud y una latitud
		
		//date(string "format") de
		echo date("Y");
		echo "<br>";
		echo date("d M y");
		echo "<br>";
		echo date("d/m/Y");
		echo "<br>";
		echo date("d/m/Y h:i:s");
		echo "<br>";
		echo date("H:i:s");
		echo "<br>";
		echo date("l");
		echo "<br>";
		echo date("l jS \of F Y j:i:s A");
		echo "<br>";
		
		//getdate() devuelve un array asociativo con con información de la fecha y hora
		$hoy = getdate();
		var_dump($hoy);
		
		if($hoy["month"] == "December"){
			echo "es Diciembre";
		}
		
		//date_default_timezone_get() coge la zona horaria definida en la franja horaria
		echo "Zona horaria " . date_default_timezone_get();
		echo "<br>";
		
		//date_default_timezone_set() se puede modificar la zona horaria definida indicandole la franja horaria
		date_default_timezone_set("America/Los_Angeles");
		echo "Zona horaria actual: " . date_default_timezone_get();
		
	?>
</body>
</html>