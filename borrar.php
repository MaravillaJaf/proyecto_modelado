<?php
    $idc = $_REQUEST['idC'];
    
    $link = mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, "cafeteria");
    
    $result = mysqli_query($link, "DELETE FROM compras WHERE id_compra = '$idc'");
    
    header("Location: compras.php");
?>
