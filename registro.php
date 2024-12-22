<?php

include ("conexion.php");

	//obtenemos los valores del formulario a traves del valos name en cada input
	$nombre = $_POST['nombreuser'];
	$clave = $_POST['pass'];
	$correo = $_POST['email'];
	$telefono = $_POST['telefono'];
	

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Registrarse']))
	{
		$sqlgrabar = "INSERT INTO usuario(nombre, clave, correo, telefono) values ('$nombre','$clave','$correo','$telefono')";

if(mysqli_query($conn,$sqlgrabar))
		{
			header("Location: principal.php");
		}
		else 
		{
			echo "Error: " .$sql."<br>".mysql_error($conn);
		}
	}	
?>