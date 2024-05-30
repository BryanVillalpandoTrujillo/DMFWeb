<?php
session_start();

// Verificar si el usuario ha iniciado sesión
//if (!isset($_SESSION['user_id'])) {
  //  header("Location: loginnn.php");
    //exit();
//}

// Obtener los datos del usuario desde la sesión
$nombre = $_SESSION['nombre'];
$telefono = $_SESSION['telefono'];
$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">DMF</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#">Perfil</a></li>
                    <li><a href="#">Tus eventos</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1>Valle de la Mentefactura</h1>
                <p>
                    Empresa sin fines de lucro 
                    dedicada a mejora la organización 
                    de los eventos gratutios,
                    evitando sobre cupo e incoformidad
                    en los asistentes.
                </p>
                <a href="#" class="btn-1">información</a>
            </div>
            <div class="header-img">
                <img src="images/dmf.jpg" alt="">
            </div>
        </div>
    </header>
    <section class="about container">
        <div class="about-img">
            <img src="images/mente.jpg" alt="">
        </div>
        <div class="about-txt">
            <h2>Qué es la Mentefactura?</h2>
            <p>DMF</p>
            <br>
            <p>
                “En Guanajuato, la Mentefactura, no es sólo un concepto, 
                es una política pública que coloca al ser humano, 
                a los ciudadanos, al centro del desarrollo científico y tecnológico, 
                por ello la importancia y relevancia de reconocer las investigaciones 
                que justamente buscan el desarrollo de las comunidades mediante el conocimiento”, expresó.
            </p>
        </div>
    </section>
    <main class="servicios">
        <h2>Conferencias</h2>
        <div class="servicios-content container">
            <div class="servicio-1">
                <img src="images/farid.jpg" alt="">
                <h2>Farid Dieck</h2>
                <h3>12-05-2024</h3>
                <h3>5:00 PM</h3>


            </div>
            <div class="servicio-1">
                <img src="images/Marcus.jpg" alt="">
                <h2>Marcus Dantus</h2>
                 <h3>12-05-2024</h3>
                 <h3>5:00 PM</h3>



            </div>
            <div class="servicio-1">
                <img src="images/javi.jpg" alt="">
                <h2>Javier Santaolalla</h2>
               <h3>12-05-2024</h3>
               <h3>5:00 PM</h3>



            </div>
            <div class="servicio-1">
                <img src="images/robery.jpg" alt="">
                <h2>Roberto Martinez</h2>
                <h3>12-05-2024</h3>
                <h3>5:00 PM</h3>


            </div>
        </div>
    </main>
    <section class="formulario container">
        <form method="post" action="view_data.php" autocomplete="off">
        <p><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre); ?></p>
        <p><strong>Teléfono:</strong> <?php echo htmlspecialchars($telefono); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<select class="form-control">
  <option value="1">Farid Dieck</option>

  <option value="2">Marcus Dantus</option>
  <option value="3">Javier Santaolalla</option>
  <option value="4">Roberto Martinez</option>
</select>

</div>
    <input type="submit" name="siuuu" class="btn" value="Asistir"> 

    </form>
</section>
    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <a href="#" class="logo">DMF</a>
            </div>
            <div class="link">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#">Tus eventos</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="#">Perfil</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>
