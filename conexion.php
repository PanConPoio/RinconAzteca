<?php

$dbhost = "localhost";
$dbuser = "u447958820_Jeremy";
$dbpass = "Jeremy200789000";
$dbname = "u447958820_ra";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $dbname);

if(!$conn)
{
	die("No hay conexion: ".mysqli_connect_error());	
}
?>