<?php
include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['primerNombre'])) {
    $primerNombre = $_POST['primerNombre'];
    $primerApellido = $_POST['primerApellido'];
    $numeroTarjeta = $_POST['numeroTarjeta'];
    $fechaExpiracion = $_POST['fechaExpiracion'];
    $cvv = $_POST['cvv'];

    $sqlgrabar = "INSERT INTO pagos(primerNombre, primerApellido, numeroTarjeta, fechaExpiracion, cvv) 
                  VALUES ('$primerNombre','$primerApellido','$numeroTarjeta','$fechaExpiracion','$cvv')";

    if (mysqli_query($conn, $sqlgrabar)) {
        echo '<script>
                alert("Pago Exitoso");
                window.location.href="indexuser.html";
              </script>';
    } else {
        echo "Error: " . $sqlgrabar . "<br>" . mysqli_error($conn);
    }
}
?>