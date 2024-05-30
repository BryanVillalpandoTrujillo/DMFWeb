<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="formulario container">
    <form method="post" action="send.php" autocomplete="off"> 
        <h2>Registra Asistencia</h2>
        <div class="input-group">
            <div class="input-container">
                <input type="text" name="name" placeholder="Nombre y Apellido" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-container">
                <input type="tel" name="phone" placeholder="Teléfono Celular" required>
                <i class="fa-solid fa-phone"></i>
            </div>
            <div class="input-container">
                <input type="email" name="email" placeholder="Correo" required>
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-container">
                <input type="password" name="password" placeholder="Contraseña" required>
                <i class="fa-solid fa-lock"></i> 
            </div>
            <input type="submit" name="send" class="btn" value="Registrar">
        </div>
    </form>
    <p><a href="index.html">Volver al inicio</a></p>
</section>
</body>
</html>
