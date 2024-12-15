<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		//Arrays asociativos (diccionarios)
		//se pone la clave => valor
		$navegadores = array("navegador1"=> "Chrome", "navegador2" =>"Firefox", "navegador3"=>"Internet Explorer");
		$datos = array("nombre" => "Joshua", "edad"=> 32, "alumno" => true, 3 => 100);
		
		echo "Navegador3: ". $navegadores["navegador3"];
		echo "<br>";
		echo "Nombre: " . $datos["nombre"];
		echo "<br>";
		echo "Datos 3: ". $datos[3];
		
		//vamos a mostrar los tipos de varibles que tenemos guardados en el array asociativo
		echo "<br>";
		var_dump($navegadores);
		echo "<br>";
		var_dump($datos);
		
		
	?>
</body>
</html>