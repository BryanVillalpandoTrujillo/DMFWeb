<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style-l.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="regist.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required><br><br>

            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" required><br><br>

            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>
</html>
