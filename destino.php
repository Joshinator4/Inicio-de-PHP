<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<!--Con codigo php se recibe la variable nombre recibida de la página anterior -->
	<!--Se recoge con la variable predefinida $_GET["nombre de la variable"] y se muestra con echo -->
	Nombre:<?php echo $_GET["nombre"]; ?>
	Cargo:<?php echo $_GET["cargo"]; ?>
	<!-- Nombre: y Cargo: se pone solo para que se muestre en el html -->
</body>
</html>