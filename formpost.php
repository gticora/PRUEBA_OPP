<?php
include("conex.php");


$Nombres=$_POST['nombres'];
$Apellidos=$_POST['apellidos'];
$Cedula=$_POST['cedula'];
$Email=$_POST['correo'];
$Lenguajes=$_POST['lenguajes'];


$sql=" SELECT * FROM programador AS p
	WHERE p.Cedula='$Cedula'";
$res= mysqli_query($con,$sql);
$row = mysqli_fetch_array($res);


if(!empty($row)){
	echo '<script type="text/javascript">
		alert("Existe ya un programador guardado");
		window.location.href="index.php";
	</script>';
}else{
	$Fecha= date("y-m-d");
	$sql_insert="INSERT INTO programador (Nombres, Apellidos, Cedula, Correo, Lenguajes, Fecha) VALUES ('$Nombres', '$Apellidos', '$Cedula', '$Email', '$Lenguajes', '$Fecha')";
	$res = mysqli_query($con, $sql_insert);

	if($res){
		echo '<script type="text/javascript">
		alert("Se agrego Correctamente el desarrollador");
			window.location.href="index.php";
		</script>';
	}else{
		echo "Error". $sql_insert . "<br>". mysqli_query($con);
	}

}



?>