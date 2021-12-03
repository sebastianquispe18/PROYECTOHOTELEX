<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "hotelex";

$conexion = new mysqli($server,$user,$pass,$db);
if ($conexion -> connect_errno){
	die ("la conexion fallo" . $conexion->connect_errno);
}