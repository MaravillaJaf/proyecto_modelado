<?php
session_start();

if (!isset($_SESSION['usuarioActual'])) {
    header("Location: iniciar.php");
    exit();
}
?>
<script LANGUAGE="JavaScript">
    function confirmSubmit() {
        var eli = confirm("Est� seguro de eliminar este registro?");
        if (eli) return true;
        else return false;
    }
</script>
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
    <style>
#img_{
    width: 100px;
    height: auto;
}
    </style>
</head>

<body>
    <header class="titulo sombra">
        <h1>PIZZAS ARTESANALES</h1>
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
    <H2>Editar Bebidas</H2>

    <?php
    include("tablas/conexion.php");
    $link = Conectarse();
    $result = mysqli_query($link, "select * from bebidas");
    ?>
    <TABLE BORDER=1 class="menu sombra">
        <TR>
            <TD bgcolor="#FFFFCC"><B>ID</B></TD>
            <TD bgcolor="#FFFFCC"><B>Imagen</B></TD>
            <TD bgcolor="#FFFFCC"><B>Nombre</B></TD>
            <TD bgcolor="#FFFFCC"><B>Precio</B></TD>
        </TR>
        <?php

        while ($row = mysqli_fetch_array($result)) {
            $ti = $row["img"];
            $di = $row["precio"];
            $id = $row["id_bebidas"];
            $nom = $row["nombre"];
            echo "<tr>";
            echo "<td>" . $id . "</td>";
            echo "<td><img src='img/" . $ti . "' alt='' id='img_'></td>";
            echo "<td>" . $nom . "</td>";
            echo "<td>" . $di . "</td>";
            echo "<td><center>";
            echo "<a onclick=\"return confirmSubmit()\" href=\"tablas/borrar2new.php?id_bebidas=" . $id . "\"><img src='tablas/eliminar.bmp' width='14' height='14' border='0'></a>";
            echo "</center></td>";
            echo "<td><center>";
            echo "<a href=\"tablas/actualizanew.php?id_bebidas=" . $id . "\"><img src='tablas/actualiza.jpg' width='25' height='25' border='0'></a>";
            echo "</center></td>";
            echo "</tr>";
        }

        mysqli_free_result($result);
        mysqli_close($link);
        ?>
    </table>


    <footer>
        <p>Derechos Reservados</p>
    </footer>
</body>

</html>