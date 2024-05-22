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
            <a href="registrarse.php" class="boton sombra">Registrarse</a>
            <a href="iniciar.php" class="boton sombra">Iniciar Sesion</a>
            <?php
                if(isset($_SESSION["usuarioActual"])){
                    echo'<a href="cerrar.php" class="boton sombra">Cerrar Sesion</a>';
                }
            ?>
        </div>  
    </header>

    <section>
        <div class="navbg">
            <nav class="nav contenedor">
                <a href="index.php">Inicio</a>
                <a href="bebidas.php">Bebidas</a>
                <a href="comidas.php">Comidas</a>
            </nav>
        </div>
    </section>
    

    <section class="subtitulo contenedor sombra">
        <div class="contenido">
            <h2>Iniciar Sesion</h2>
            <div>
                <form action="verificarIniciar.php" action="post" class="formulario">
                    <fieldset>
                        <legend>Llena todos los campos</legend>
                        <div class="inputs">
                            <label>usuario</label>
                            <input type="text" placeholder="201X00000" name="usuario" require>
                        </div>
                        <div class="inputs">
                            <label">Contraseña</label>
                            <input type="password" placeholder="contraseña" name="contra" require>
                        </div>
                        <!--
                        <div class="inputs">
                            <img src="captcha.php" alt="captcha"><br>
                            <label for="captcha_respuesta">Escribe el código que aparece arriba:</label><br>
                            <input type="text" id="captcha_respuesta" name="captcha_respuesta" required><br>
                        </div>
                        -->
                        <div class="inputs">
                            <input type="submit" class="enviar" value="Enviar">
                        
                        </div>
                        <?php
                            if (isset($_GET['error']) && $_GET['error'] == "captcha") {
                                echo "<p style='color:red;'>¡Error: El captcha ingresado es incorrecto! Inténtalo de nuevo.</p>";
                            }
                            if (isset($_GET['error']) && $_GET['error'] == "datos") {
                                echo "<p style='color:red;'>¡Error: Los datos son incorrectos.</p>";
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