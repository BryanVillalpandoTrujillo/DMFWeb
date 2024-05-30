<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>

<section class="formulario container">
    
    <form method="post" action="loginnn.php"> 
        <h2>Iniciar Sesión</h2>
      <?php
include("loginnn.php");
include("conexion.php");
?>
    <div class="input-group">
    <div class="input-container">
        <input type="email" name="email" placeholder="Correo" required>
        <i class="fa-solid fa-envelope"></i>
    </div>
    <div class="input-container">
        <input type="password" name="password" placeholder="password" required>
        <i class="fa-solid fa-lock"></i> 
    </div>
    <input type="submit" name="siuuu" class="btn" value="Iniciar Sesión"> 
</div>

    </form>
    <p><a href="login.html">Volver al inicio</a></p>
</section>
</body>
</html>
