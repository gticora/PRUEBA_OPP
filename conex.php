<?php

//Archivo de conexion a la base de datos


$hostname="localhost";
$bd="gustavoticora";
$user="root";
$pass="";

$con = mysqli_connect($hostname,$user,$pass) or die ("no se conecto a la bd");

$db  = mysqli_select_db($con,$bd) or die ("error!");


?>