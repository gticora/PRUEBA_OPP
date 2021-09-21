<?php


$valor1=$_POST['valor1'];
$operacion=$_POST['operacion'];
$valor2=$_POST['valor2'];

switch ($operacion) {
	case '1':
		$resultado= $valor1+$valor2;
		echo "el resultado de la suma es: ".$resultado;
		break;
	case '2':
		$resultado= $valor1-$valor2;
		echo "el resultado de la resta es: ".$resultado;
		break;
	case '3':
		$resultado= $valor1*$valor2;
		echo "el resultado de la multiplicacion es: ".$resultado;
		break;
	case '4':
		$resultado= $valor1/$valor2;
		echo "el resultado d ela division es: ".$resultado;
		break;
	case '5':
		$resultado= $valor1/100;
		echo "el resultado del porcentaje es: ".$resultado;
		break;
	case '6':
		$resultado= sqrt($valor1);
		echo "el resultado de la raiz es: ".$resultado;
		break;
}



?>