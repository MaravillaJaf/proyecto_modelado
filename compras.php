<?php
session_start();

if (!isset($_SESSION['usuarioActual'])) {
    header("Location: iniciar.php");
    exit();
}
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
        <?php
                if(isset($_SESSION["usuarioActual"])){
                    echo"<div class='link'>";
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
                    echo"</div>";
                }else {
                    echo '<a href="registrarse.php" class="boton sombra">Registrarse</a>';
                    echo '<a href="iniciar.php" class="boton sombra">Iniciar Sesión</a>';
                }
            ?>
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
        <h2>Compras</h2>
        <table border="5" class="menu sombra">
            <tr>
                <th>Imagen</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
            <?php
            $link = mysqli_connect("localhost", "root", "");
            mysqli_select_db($link, "cafeteria");
            $result = mysqli_query($link, "select * from compras");
            echo "<div class='seccion'>";
            $total = 0;
            while ($row = mysqli_fetch_array($result)) {
                $idc=$row['id_compra'];
                $img = $row["imagen"];
                $cantidad = $row["cantidad"];
                $precio = $row["precio"];
                $total += $precio;
                ?>
                <tr>
                    <td><img src="img/<?php echo $img; ?>"></td>
                    <td>
                        <?php echo $cantidad; ?>
                    </td>
                    <td>
                        <?php echo $precio; ?>
                    </td>
                    <td>
                        
                        <form action='borrar.php' method='POST'>
                            <input type='hidden' name='idC' value='<?php echo $idc ?>'>
                            <input type='submit' value='Borrar' class='boton'>
                        </form>
                        
                    </td>
                </tr>
                <?php
            }
            echo "</div>";
            echo "<tr>";
            echo "<td>Total</td>";
            echo "<td></td>";
            echo "<td>$total</td>";
            echo "<td><a href='metodospago.html'>PAGAR</a></td>";
            echo "</tr>";

            ?>
        </table>
    </main>
    <footer>
        <p>Derechos Reservados</p>
    </footer>
</body>

</html>