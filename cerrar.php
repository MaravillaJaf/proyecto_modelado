<?php session_start(); 
// Borramos toda la sesion

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"cafeteria");
$result=mysqli_query($link,"truncate compras");

session_destroy(); 
header("Location: iniciar.php");
?>