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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>
<section>
<div class="card mb-3">
	<div class="card-body">
		<form class="row g-3" action="formpost.php" method="post">
			<div class="col-md-6">
				<label for="inputEmail4" class="form-label"><b>Registro de programador</b></label>
				<input type="text" name="nombres" class="form-control" id="nombres" placeholder="Nombres Completos" required>
				<label for="inputAddress2" class="form-label"></label>
				<input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Apellidos Completos" required>
				<label for="inputAddress2" class="form-label"></label>
				<input type="text" name="cedula" class="form-control" id="cedula" placeholder="Documento de identidad" required>
				<label for="inputAddress2" class="form-label"></label>
				<input type="email" name="correo" class="form-control" id="correo" placeholder="Correo electronico" required>
				<label for="inputAddress2" class="form-label"></label>
				<input type="text"  name="lenguajes" class="form-control" id="lenguajes" placeholder="lenguajes">
				<label for="inputAddress2" class="form-label"></label>
			</div>
			<div class="col-12">
			<button class="btn btn-primary" type="submit">Button</button>
			</div>
		</form>
	</div>
</div>
<div class="card-body">
	<h5 class="card-title"><span></span></h5>
	<p class="card-text"><span><b>Cantidad de programadores  registrados son: <?=$cantidad?></b></span></p>
	<p class="card-text">
		<small class="text-muted"></small>
	</p>
</div>
</section>
</body>
</html>