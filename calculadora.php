
<!DOCTYPE html>
<html>
<head>
	<title>Calculadora en php</title>
	<style type="text/css">
		
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<form action="calculapost.php" method="post">
	<div>
		<span>Ingrese el primer valor</span>
		<span><input type="text" name="valor1"></span>
	</div>
	<div>
		<span>Operador</span>
		<span><select name="operacion" id="operacion">
			<option value="0">seleccione</option>
			<option value="1">Suma</option>
			<option value="2">Resta</option>
			<option value="3">Multiplicacion</option>
			<option value="4">Division</option>
			<option value="5">Porcentaje</option>
			<option value="6">Raiz cuadrada</option>
		</select></span>
	</div>

	<div class="valor2" style="display: none;">
		<span>Ingrese el segundo valor</span>
		<span><input type="text" name="valor2"></span>
	</div>
	<div>
		<span><input type="submit" name="Calculadora"></span>
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