<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pizzeria - Generar Reportes</title>
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
            <h2>Generar Reporte de Ventas</h2>
            <div>
                <form action="get-sales-report.php" method="post" class="formulario">
                    <fieldset>
                        <legend>Selecciona el rango de fechas</legend>
                        <div class="inputs">
                            <label for="start-date">Fecha de Inicio:</label>
                            <input type="date" id="start-date" name="start-date" required>
                        </div>
                        <div class="inputs">
                            <label for="end-date">Fecha de Fin:</label>
                            <input type="date" id="end-date" name="end-date" required>
                        </div>
                        <div class="inputs">
                            <input type="submit" class="enviar" value="Generar Reporte">
                        </div>
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
