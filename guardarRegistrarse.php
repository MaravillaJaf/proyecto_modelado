<?php
session_start();
?>

<html>

<head>
	<title>Registrar Datos</title>
</head>

<body>
	<hr>
	<br>
	<?php
	$usuario = $_REQUEST['usuario'];
	$contraseña = $_REQUEST['contra'];
	$nombre = $_REQUEST['nombre'];
	$id = $_REQUEST['id'];
	$captcha = $_REQUEST['captcha_respuesta'];

	if (isset($_REQUEST['captcha_respuesta']) && $_REQUEST['captcha_respuesta'] == '0') {
		$link = mysqli_connect("localhost", "root", "", "pizzeria");
		mysqli_select_db($link, "pizzeria");

		// Verificar si la matrícula ya existe en la base de datos
		$query = "SELECT * FROM registro WHERE usuario = '$usuario'";
		$result = mysqli_query($link, $query);

		if (mysqli_num_rows($result) > 0) {
			// el usuario ya existe, redirigir con un mensaje de error
			header("Location: registrarse.php?error=usuario_repetido");
		} else {
			// el usuario no existe, insertar los datos en la base de datos
			mysqli_query($link, "INSERT INTO registro(nombre, usuario, contraseña, id) VALUES ('$nombre', '$usuario', '$contraseña', '$id')");
			header("Location: iniciar.php");
		}
	} else {
		header("Location: registrarse.php?error=captcha");
	}
	?>
</body>

</html>