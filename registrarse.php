<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pizzeria</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preload" href="css/style.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="titulo sombra">
        <h1>PIZZAS ARTESANALES</h1>
        <div class="link">
            <?php
            if (isset($_SESSION["usuarioActual"])) {
                echo '<a href="compras.php" class="boton sombra">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <circle cx="6" cy="19" r="2" />
                                <circle cx="17" cy="19" r="2" />
                                <path d="M17 17h-11v-14h-2" />
                                <path d="M6 5l14 1l-1 7h-13" />
                            </svg>
                        </a>';
                echo '<a href="cerrar.php" class="boton sombra">Cerrar Sesión</a>';
            } else {
                echo '<a href="registrarse.php" class="boton sombra">Registrarse</a>';
                echo '<a href="iniciar.php" class="boton sombra">Iniciar Sesión</a>';
            }
            ?>
        </div>
    </header>

    <section>
        <div class="navbg">
            <nav class="nav contenedor">
                <a href="index.php">Inicio</a>
                <a href="Bebidas.php">Bebidas</a>
                <a href="comidas.php">Comidas</a>
            </nav>
        </div>
    </section>


    <section class="subtitulo contenedor sombra">
        <div class="contenido">
            <h2>Registrarse</h2>
            <div>
                <form action="guardarRegistrarse.php" action="post" class="formulario">
                    <fieldset>
                        <legend>Llena todos los campos</legend>
                        <div class="inputs">
                            <label>Usuario</label>
                            <input type="text" name="usuario" placeholder="201X00000" required>
                        </div>
                        <div>
                            <label>Nombre</label>
                            <input type="text" name="nombre" placeholder="Nombre" required>
                        </div>
                        <div class="inputs">
                            <label">Contraseña</label>
                                <input type="password" name="contra" placeholder="Contraseña" required>
                        </div>
                       <!DOCTYPE html>
                       <html lang="en">
                       <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Document</title>
                       </head>
                       <body>
                        
                       </body>
                       </html>
                       
                       <div class="inputs">
                            <img src="captcha_cero.jpeg" alt="captcha"  >
                            <!--<img src="captcha.php" alt="captcha"><br>-->
                           <br> <label for="captcha_respuesta">Escribe el código que aparece arriba:</label><br>
                            <input type="text" id="captcha_respuesta" name="captcha_respuesta" required><br>
                            <input type="hidden" name="id" value="1"><br>
                        </div>
                        <div class="inputs">
                            <input type="submit" class="enviar" value="Enviar">
                        </div>
                        <?php
                        if (isset($_GET['error']) && $_GET['error'] == "0") {
                            echo "<p style='color:red;'>¡Error: El captcha ingresado es incorrecto! Inténtalo de nuevo.</p>";
                        } else {
                            if (isset($_GET['error']) && $_GET['error'] == "matricula_repetida") {
                                echo "<p style='color:red;'>¡Error: La matricula ya esta registrada</p>";
                            }
                        }
                        ?>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <p>Derechos Reservados</p>
    </footer>
</body>

</html>