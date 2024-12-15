<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		
		//for each va a iterar arrays u objetos
		$array1 = array(1,2,3,4);
		$valores = array("uno" => 1, "dos" => 2, "tres" => 3);
		
		foreach($array1 as $valor){
			echo $valor;
			echo "<br>";
		}
		
		foreach($valores as $clave => $valor){
			echo "valores[$clave] = > $valor";
			echo "<br>";
		}
	?>
</body>
</html>