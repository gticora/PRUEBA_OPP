
<!DOCTYPE html>
<html>
<head>
	<title>Calculadora en php</title>
	<style type="text/css">
		
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>
<form class="row g-3" action="calculapost.php" method="post">
	<div class="col-md-6">
	<label for="inputEmail4" class="form-label"><b>Calculadora</b></label>
		<input type="text" name="valor1" class="form-control" id="valor1" placeholder="Ingrese el primer valor" required>
		<label for="inputAddress2" class="form-label"></label>
		<select name="operacion" class="form-control" id="operacion">
			<option value="0">seleccione</option>
			<option value="1">Suma</option>
			<option value="2">Resta</option>
			<option value="3">Multiplicacion</option>
			<option value="4">Division</option>
			<option value="5">Porcentaje</option>
			<option value="6">Raiz cuadrada</option>
		</select>
		<label for="inputAddress2" class="form-label"></label>
		<input type="text" style="display:none;" name="valor2" class="form-control valor2" id="valor2" placeholder="Ingrese el segundo valor" required>
		<label for="inputAddress2" class="form-label"></label>
	</div>
	<div class="col-12">
		<button class="btn btn-primary" type="submit">Calculadora</button>
	</div>
</form>
</body>
</html>
<script type="text/javascript">

	$("#operacion").change(function(){
		var val= $("#operacion").val();
		if(val==1 || val==2 || val==3 || val==4){
			$(".valor2").css("display", "block");	
		}else{
			$(".valor2").css("display", "none");
		}
	});
</script>