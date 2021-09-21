<?php

include("conex.php");

$sql=" SELECT COUNT(p.Nombres) as cantidad FROM programador AS p";
$res= mysqli_query($con,$sql);
$row = mysqli_fetch_array($res);

$cantidad=$row["cantidad"];

?>


<!DOCTYPE html>
<html>
<head>
	<title>Prueba</title>
</head>
<body>
<form action="formpost.php" method="post">
	<div>
		<span>Nombres</span>
		<span><input type="text" name="nombres"></span>
	</div>
	<div>
		<span>Apellidos</span>
		<span><input type="text" name="apellidos"></span>
	</div>
	<div>
		<span>Cedula</span>
		<span><input type="number" name="cedula"></span>
	</div>
	<div>
		<span>Email</span>
		<span><input type="email" name="correo"></span>
	</div>
	<div>
		<span>Lenguajes</span>
		<span><input type="text" name="lenguajes"></span>
	</div>
	<div>
		<span><input type="submit" name="Enviar"></span>
	</div>
</form>
<br>
<div>
	<span>Cantidad de programadores  registrados son: <?=$cantidad?></span>
</div>
</body>
</html>