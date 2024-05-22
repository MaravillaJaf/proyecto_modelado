<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>pizzeria
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preload" href="css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        #section_menu {
            margin: 10px;
        }

        #cantidad {
            width: 30%;
        }
    </style>
</head>

<body>
    <header class="titulo sombra">
        <h1>PIZZAS ARTESANALES</h1>
        <div class="link">
            <?php if (isset($_SESSION["usuarioActual"])) : ?>
                <a href="compras.php" class="boton sombra">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="6" cy="19" r="2" />
                        <circle cx="17" cy="19" r="2" />
                        <path d="M17 17h-11v-14h-2" />
                        <path d="M6 5l14 1l-1 7h-13" />
                    </svg>
                </a>
                <a href="cerrar.php" class="boton sombra">Cerrar Sesión</a>
            <?php else : ?>
                <a href="registrarse.php" class="boton sombra">Registrarse</a>
                <a href="iniciar.php" class="boton sombra">Iniciar Sesión</a>
            <?php endif; ?>
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



    <main class="main contenedor sombra">
        <form action="guardarCompraB.php" class="menu" method="POST">
            <fieldset>
                <legend>Bebidas</legend>
                <div class="seccion">
                    <?php
                    $link = mysqli_connect("localhost", "root", "", "cafeteria");
                    mysqli_select_db($link, "pizzeria");
                    $result = mysqli_query($link, "SELECT * FROM bebidas");

                    while ($row = mysqli_fetch_array($result)) {
                        $img = $row["img"];
                        $nombre = $row["nombre"];
                        $precio = $row["precio"];
                        $id_bebidas = $row["id_bebidas"];

                        echo '<section id="section_menu">';
                        echo '<img src="img/' . $img . '">';
                        echo '<br>';
                        echo '<label>' . $nombre . ' $' . $precio . '</label> <br>';
                        echo '<label> Cantidad: </label>';
                        echo '<input type="number" name="cantidad' . $id_bebidas . '" id = "cantidad" min="1">';

                        echo '<input type="hidden" name="id' . $id_bebidas . '" value="' . $id_bebidas . '">';
                        echo '<input type="hidden" name="img' . $id_bebidas . '" value="' . $img . '">';
                        echo '<input type="hidden" name="precio' . $id_bebidas . '" value="' . $precio . '">';
                        echo '</section>';
                    }
                    ?>
                </div>
                <?php
                if (isset($_SESSION["usuarioActual"])) {
                    echo '<input type="submit" name="Enviar" value="Enviar" />';
                }
                ?>

            </fieldset>
        </form>
    </main>


    <footer>
        <p>Derechos Reservados</p>
    </footer>
</body>

</html>