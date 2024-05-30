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
            <a href="#" class="logo">logo</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1>Medical Center</h1>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing 
                    elit. Atque nemo adipisci cupiditate mollitia amet 
                    voluptates necessitatibus libero perspiciatis velit 
                    cumque? Excepturi distinctio, ratione ipsa laboriosam 
                    ad debitis neque assumenda ullam.
                </p>
                <a href="#" class="btn-1">informacion</a>
            </div>
            <div class="header-img">
                <img src="images/left.png" alt="">
            </div>
        </div>

    </header>

    <section class="about container">
        <div class="about-img">
            <img src="images/about.png" alt="">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Vel fugit iure sapiente nobis reiciendis corrupti totam 
                explicabo tempora ipsum impedit odio ipsa iusto quidem, 
                officia accusamus quo quod sequi harum?
            </p>
            <br>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Dolor dolorem, illo saepe, sit quasi autem atque, eum 
                consequatur officiis reprehenderit facere molestias 
                exercitationem nesciunt ratione enim fuga sunt magni 
                impedit?
            </p>
        </div>
    </section>

    <main class="servicios">
        <h2>Servicios</h2>
        <div class="servicios-content container">
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h3>pediatria</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                <h3>ginecologia</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-bed-pulse"></i>
                <h3>dermatologia</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-hospital"></i>
                <h3>cardiologia</h3>
            </div>
        </div>
    </main>

    <section class="formulario container">
        <form method="post" autocomplete="off">
            <h2>Agenda Cosulta</h2>
            <div class="input-group">

                <div class="input-container">
                    <input type="text" name="name" id="Nombre y Apellido">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="tel" name="phone" id="Telefono Celular">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="input-container">
                    <input type="email" name="email" id="Correo">
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-container">
                    <textarea name="message" placeholder="Detalles de la consulta"></textarea>
                </div>
                <input type="submit" name="send" class="btn" onclick="myFunction()">

            </div>
        </form>
    </section>

    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <a href="#" class="logo">logo</a>
            </div>

            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <?php
        include("send.php");
    ?>

    <script>
        function myFunction(){
            window.location.href="http://localhost/pagina"
        }
    </script>

</body>
</html>