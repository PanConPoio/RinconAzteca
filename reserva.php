<?php
include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['reserva'])) {
    // Obtenemos los valores del formulario a través del valor name en cada input
    $nombre = $_POST['name'];
    $correo = $_POST['email'];
    $telefono = $_POST['tel'];
    $fecha = $_POST['date'];
    $hora = $_POST['time'];

    $sqlgrabar = "INSERT INTO reserva (nombre, correo, telefono, fecha, hora) VALUES ('$nombre','$correo','$telefono','$fecha','$hora')";

    if(mysqli_query($conn,$sqlgrabar))
    {
        echo
    '<script>
        alert("Reserva Exitosa");
        location.href="indexuser.html";
    </script>'
    ;
    }
    else 
    {
        echo "Error: " .$sql."<br>".mysql_error($conn);
    }
}	
?>