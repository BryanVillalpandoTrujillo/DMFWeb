<?php
session_start();

// Incluir el archivo de conexión
require_once 'conexion.php'; // Asegúrate de que este archivo existe y tiene la conexión correcta

if (!empty($_POST["siuuu"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Escapar los valores para prevenir inyección SQL
    $email = $conex->real_escape_string($email);
    $password = $conex->real_escape_string($password);

    $sql = "SELECT * FROM datos WHERE email = '$email' AND password = '$password'";
    $result = $conex->query($sql);

    // Verificar si se encontró un usuario
    if ($result->num_rows == 1) {
        $datos = $result->fetch_assoc();

        $_SESSION['user_id'] = $datos['id']; // Almacenar el ID en la sesión
        $_SESSION['nombre'] = $datos['nombre']; // Almacenar el nombre en la sesión
        $_SESSION['telefono'] = $datos['telefono']; // Almacenar el teléfono en la sesión
        $_SESSION['email'] = $datos['email']; // Almacenar el email en la sesión

        header("Location: index.php"); 
        exit();
    } else {
        echo '<div class="alert-danger">Acceso denegado</div>';
    } 
}
?>
