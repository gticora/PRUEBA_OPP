<?php


class matriz {

	public $arreglo_matriz = array(
		"0" => array(
			"0" => "1",
			"1" => "2",
			"2" => "3"
		),

		"1" => array(
			"0" => "4",
			"1" => "5",
			"2" => "6"
		),

		"2" => array(
			"0" => "9",
			"1" => "8",
			"2" => "9"
		)

	);


	public function prueba($arreglo_matriz){
		echo '<pre>';
		print_r($arreglo_matriz);
		echo '</pre>';
		echo "<br><span>Diagonal 1:    </span>". $diagonal1=$arreglo_matriz[0][0]+$arreglo_matriz[1][1]+$arreglo_matriz[2][2];
		echo "<br><span>Diagonal 2:    </span>". $diagonal2=$arreglo_matriz[0][2]+$arreglo_matriz[1][1]+$arreglo_matriz[2][0];
		$valor_absoluto= $diagonal1-$diagonal2;
			if($valor_absoluto<0){
				$valor_absoluto = $valor_absoluto*-1;
			}

		return $valor_absoluto;

	}


}

$val = new matriz;
$arreglo= $val->arreglo_matriz;
$valor= $val->prueba($arreglo);

echo "<br> <span> El valor absoluto es:    </span>".$valor;




?>