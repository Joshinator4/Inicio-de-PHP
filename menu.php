<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		
		const NOMBRE = "admin";
		$password = "hola1234";
		
		$temario = ["Variables", "Estructuras", "Funciones", "Frameworks" ];
		
		function calcular_letra($numero){
			$letras = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E"];
			$posicion = $numero % 23;
			echo "Tu letra del dni es: ==>  " .  $letras[$posicion];
			echo "<p> </p>";
			
		}
		
		
		switch($_GET["eleccion"]){
			case 1:
				if(NOMBRE == "admin"){
					echo "Usuario correcto ";
					if($password == "hola1234"){
						echo "Contraseña correcta ";
					}elseif($password == "0000"){
						echo "Cambia tu contraseña";
					}else{
						echo "Contraseña incorrecta";
					}
				}else{
					echo "Usuario incorrecto";
				}
				break;
				
			case 2:
				include 'final.php';
				break;
				
			case 3:
				echo "Se está mostrando el siguiente fichero " . $_SERVER['PHP_SELF'];
				break;
			
			case 4:
				$elementos = count($temario);
				
				echo "Temario completo <br>";
				
				for ($i = 0; $i < $elementos ; $i++){
					echo $temario[$i] . "<br>";
				}
				
				echo "<p> </p>";
				
				$eliminada = array_pop($temario);
				echo "Temario sin el último elemento del tema: " . $eliminada . "<br>";
				for ($i = 0; $i < count($temario) ; $i++){
					echo $temario[$i] . "<br>";
				}
				
				echo "<p> </p>";
				
				break;
			
			case 5:
				$monedapais = array(
							["pais" => "España", "moneda" => "Euro"],
							["pais" => "Reino Unido", "moneda" => "Libra"],
							["pais" => "EEUU", "moneda" => "Dolar"],
							["pais" => "Francia", "moneda" => "Euro"],
							["pais" => "Portugal", "moneda" => "Euro"]
				);
				
				sort($monedapais);
				
				foreach($monedapais as $elemento){
					if($elemento["moneda"] != "Dolar"){
						var_dump($elemento);
					}
				}
				break;
				
			case 6:
				calcular_letra(75863256);
				break;
			
			case 7:
				echo "Año actual: " . date("Y");
				echo "<br>";
				echo "Fecha actual: " . date("d-M-Y");
				break;
			
			default:
				echo "Valor no valido";
		}	
	?>
	<br>
	<a href="final.php">Volver al menú</a>
</body>
</html>