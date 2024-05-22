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
    <title>punto de ventar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preload" href="css/style.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="titulo sombra">
        <h1>PIZZAS ARTESANALESr</h1>
        <div class="link">
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

    <section class="main contenedor ">
        <div class="contenido">
            <h2>Bienvenido ADMIN</h2>
            <form action="guardarItem.php" method="POST" class="formulario" enctype="multipart/form-data">
                <fieldset>
                    <legend>Ingresar Datos</legend>
                    <div>
                        <input type="radio" name="valor" value="1">Bebida
                        <input type="radio" name="valor" value="2">Comida<br>
                        <input type="text" name="id" placeholder="ID Comida/Bebida">
                        <input type="text" name="nombre" placeholder="Nombre Comida/Bebida">
                        <input type="text" name="precio" placeholder="Precio Comida/Bebida">
                        <input type="file" name="archivo">

                    </div>
                    <input type="submit" name="Enviar" value="enviar">
                    <?php
                        if (isset($_GET['datos']) && $_GET['datos'] == "ingresados") {
                            echo "<p style='color:red;'> Los datos han sido ingresados</p>";
                        }
                        if (isset($_GET['error']) && $_GET['error'] == "noIngresados") {
                            echo "<p style='color:red;'> ERROR!:Los datos NO han sido ingresados</p>";
                        }
                    ?>
                </fieldset>
            </form>
        </div>
    </section>
    <footer>
        <p>Derechos Reservados</p>
    </footer>
</body>

</html>