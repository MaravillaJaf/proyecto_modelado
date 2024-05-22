<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIZZAS ARTESANALES</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preload" href="css/style.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="titulo sombra">  
        <h1>PIZZAS ARTESANALES </h1>
        
        <div class="link">
            <?php
                if(isset($_SESSION["usuarioActual"])){
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
                }else {
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
                <a href="bebidas.php">Bebidas</a>
                <a href="comidas.php">Comidas</a>
            </nav>
        </div>
    </section>

    <section class="subtitulo contenedor sombra">
        <div class="contenido">
            <h2>Bienvenido a la pizzeria del pueblo</h2>
            <center>
            <img src="promocion_dia.png" alt="promocion del dia"><br>
            <p style="color:white;">Visión: <br>
             Darle la mejor experiencia al paladar del cliente con nuestros productos<br>
             En los cuales hay variedades y se le puede llevar a la puerta de su hogar.<br>
             </p><br>
            <p style="color:white;">Misión: <br>
             Ser un negocio familiar brindando productos con la mejor calidad <br>
             No siendo los mejores del mundo, pero si los mejores del rumbo.  <br>
            </p><br>
            <p style="color:white;">Rol de la empresa: <br> 
             Ayudar con el antojo de un sanck o comida rápida de los clientes.<br>
             Facilitándoles el acceso mediante la pagina y los medios de contacto para así llevarlos al domicilio<br>
             </p><br>
             </center>
            <a>
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