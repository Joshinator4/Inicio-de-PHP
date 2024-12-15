<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<?php
		
		//for se utiliza porque se sabe la cantidad de veces que se va a repetir
		$numeroMultiplicar = 3;
		for($i = 1; $i <= 10; $i++){
			echo $i . " x " . $numeroMultiplicar . " = " . $i*$numeroMultiplicar ;
			echo "<br>";
		}
		
		
	?>
</body>
</html>