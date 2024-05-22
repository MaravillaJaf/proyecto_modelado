<?php
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"pizzeria");
    $result=mysqli_query($link,"truncate compras");
    header("Location: index.php");
?>