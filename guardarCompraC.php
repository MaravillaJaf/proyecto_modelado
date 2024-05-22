<?php
session_start();
$user=$_SESSION["usuarioActual"];

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"pizzeria");
$result=mysqli_query($link,"select * from comidas");
$cant_comidas = mysqli_num_rows($result);

for ($i = 101; $i <= $cant_comidas+100; $i++) {
    $cB = $_REQUEST["cantidad$i"];
    $idB = $_REQUEST["id$i"];
    $ima = $_REQUEST["img$i"];
    $precio = $_REQUEST["precio$i"];

    echo"Cantidad: $cB<br>";
    echo"ID: $idB<br>";
    echo"imagen: $ima<br>";
    echo"precio: $precio<br>";

    // Verificar si el idB ya existe en la tabla compras
    $result2 = mysqli_query($link, "SELECT * FROM compras WHERE usuario='$user' AND id_comidas='$idB'");
    $row = mysqli_fetch_assoc($result2);
    if($cB>0){
        if ($row) {
            // Si el idB ya existe, actualizar su cantidad sumándole la nueva cantidad
            $nuevaCantidad = $row['cantidad'] + $cB;
            $nuevoPrecio=$nuevaCantidad*$precio;
            mysqli_query($link,"UPDATE compras SET cantidad='$nuevaCantidad', precio='$nuevoPrecio' WHERE usuario='$user' AND id_comidas='$idB'");
            echo "datos actualizados";
        } else {
                // Si el idB no existe, insertar un nuevo registro en la tabla compras
        
                $nuevoPrecio=$cB*$precio;
                echo"$nuevoPrecio";
                mysqli_query($link,"INSERT INTO compras(usuario,id_comidas,cantidad,precio,imagen) VALUES ('$user','$idB','$cB','$nuevoPrecio','$ima')");
                echo "datos insertados";
        }
    }
}

header("Location: compras.php");
?>