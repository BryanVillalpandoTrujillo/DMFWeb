<?php
session_start();
include("conexion.php");

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Consulta SQL para obtener los datos del usuario
    $consulta = "SELECT nombre, email, telefono FROM datos WHERE id = ?";
    $stmt = mysqli_prepare($conex, $consulta);
    mysqli_stmt_bind_param($stmt, "i", $user_id); // "i" indica que es un entero
    mysqli_stmt_execute($stmt);

    $resultado = mysqli_stmt_get_result($stmt);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $row = mysqli_fetch_assoc($resultado);
        $nombre = $row['nombre'];
        $email = $row['email'];
        $phone = $row['telefono'];
    } else {
        // Si no se encuentran datos, se definen variables vacías
        $nombre = "";
        $email = "";
        $phone = "";
        echo "Error al obtener los datos.";
    }

    mysqli_stmt_close($stmt); // Cierra la sentencia preparada
} else {
    // Si no hay sesión, redirige al usuario a la página de inicio de sesión
    header("Location: login.php");
    exit();
}
?>
