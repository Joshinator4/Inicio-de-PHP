<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hola Mundo PHP</title>
</head>

<body>
	<?php
		//Variables
		$edad = 32; //integer
		$estatura = 1.86;//float
		$nombre = "Joshua";//string
		$frase = "Joshua tiene $edad años";//el $edad busca la variable edad
		//cuidado que esto con comillas simples no funciona asi, mostraría $edad
		$frase2 = 'Joshua tiene $edad años';
		$alumno = true;
		$profesor = false;
		
		echo $edad;
		//se pueden usar etiquetas html
		echo "<br>";
		echo $estatura;
		echo "<br>";
		//El concatenador . añade al string la variable nombre
		echo "Tu nombre es " . $nombre ;
		echo "<br>";
		//esto si es true muestra 1 y si es false no muestra nada
		echo $alumno;
		echo "<br>";
		//con json_encode() se muestra true o false
		echo json_encode($alumno);
		echo "<br>";
		echo $profesor;
		echo "<br>";
		echo json_encode($profesor);
		
	?>
</body>
</html>