<?php
session_start();

// Generar un código captcha aleatorio
$length = 6; // Longitud del código captcha
$captcha = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);

// Guardar el código captcha en una sesión de PHP
$_SESSION["captcha"] = $captcha;

// Crear una imagen captcha con el código distorsionado
$img = imagecreatetruecolor(100, 30);
$bg_color = imagecolorallocate($img, 255, 255, 255); // Color de fondo blanco
$text_color = imagecolorallocate($img, 0, 0, 0); // Color de texto negro
imagefilledrectangle($img, 0, 0, 99, 29, $bg_color); // Dibujar fondo
imagestring($img, 5, 20, 8, $captcha, $text_color); // Dibujar texto
for ($i = 0; $i < 5; $i++) {
    $line_color = imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255)); // Color de línea aleatorio
    imageline($img, rand(0, 99), rand(0, 29), rand(0, 99), rand(0, 29), $line_color); // Dibujar línea
}
header("Content-type: image/png"); // Establecer tipo de contenido de la imagen
imagepng($img); // Mostrar imagen captcha
imagedestroy($img); // Liberar memoria
?>