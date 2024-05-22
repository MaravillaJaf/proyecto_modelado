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
           <a href="index.php" class="boton sombra">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <circle cx="6" cy="19" r="2" />
                                <circle cx="17" cy="19" r="2" />
                                <path d="M17 17h-11v-14h-2" />
                                <path d="M6 5l14 1l-1 7h-13" />
                            </svg>
            </a>
            <a href="compras.php" class="boton sombra">Escanear codigo</a>
            <a href="ingresar.php" class="boton sombra">Ingresar Producto</a>
            <a href="cerrar.php" class="boton sombra">Cerrar Sesion</a>
        </div>  
    </header>

    <section>
        <div class="navbg">
            <nav class="nav contenedor">
                <a href="indexAdmin.php">Inicio</a>
                <a href="bebidasAdmin.php">Bebidas</a>
                <a href="comidasAdmin.php">Comidas</a>
            </nav>
        </div>
    </section>

    <section class="subtitulo contenedor sombra">
        <div class="contenido">
            <h2>Bienvenido ADMIN</h2>
            <br>
            <br>
            <br>
            <a href="greporte.php" class="boton sombra">GENERAR REPORTE</a>
        </div>
    </section>
    <footer>
        <p>Derechos Reservados</p>
        <p>ayuda</p>
        <p>cometarios</p>
        <p>quejas</p>
        <p>empleo</p>
        <p>acerca de nosotoros</p>
    </footer>
</body>

</html>