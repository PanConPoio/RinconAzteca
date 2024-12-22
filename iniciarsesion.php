<?php

session_start();MN  
include("conexion.php"); // Incluir el archivo de conexión a la base de datos

if (isset($_POST['login_button'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT correo, clave FROM usuario WHERE correo = '$username'";
    $query = mysqli_query($conn, $sql);

    if ($query) {`
        $row = mysqli_fetch_assoc($query);
        if ($row && $row['clave'] === $password) {
            $_SESSION['login_button'] = $username;
            header("location: indexuser.html"); // Redireccionar al usuario a la página de bienvenida
            exit(); // Importante: asegúrate de salir del script después de redirigir
        } else {
            echo '<script>alert("Usuario y/o contraseña incorrectos. Vuelve a intentarlo. O Crea tu propio Usuario");';
            echo 'window.location.href = "index3.html";</script>';
            exit(); // Salir del script después de mostrar el mensaje de error
        }
    } else {
        die("Error en la consulta: " . mysqli_error($conn));
    }

    mysqli_close($conn);
}

?>



