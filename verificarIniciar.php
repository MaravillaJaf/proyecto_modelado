<?php
	session_start();
?>
<html>
<head><title>Registrar Datos</title></head>
<body>

<hr>
<br>
<?PHP
	$usuario=$_REQUEST['usuario'];
	$contraseña=$_REQUEST['contra'];

	echo "usuario: $usuario<br>Contraseña: $contraseña";

        $link=mysqli_connect("localhost","root","");
		mysqli_select_db($link,"pizzeria");
		$result=mysqli_query($link,"select * from registro where usuario='$usuario'");
        $row = mysqli_fetch_array($result);
        $mat= $row["usuario"];
        $con=$row["contraseña"];
		$id=$row['id'];
		echo"<br>Entro";
		var_dump($id);
        if($usuario==$mat && $contraseña==$con && $id=='0'){
			$_SESSION["usuarioActual"] = $row['usuario'];
			echo"<br>Entro2";
			$link=mysqli_connect("localhost","root","");
			mysqli_select_db($link,"pizzeria");
			$result=mysqli_query($link,"truncate compras");
            header("Location: index.php");
        }
		else if($usuario==$mat && $contraseña==$con && $id=='1'){
			$_SESSION["usuarioActual"] = $row['usuario'];
			header("Location: indexAdmin.php");
		}
		else{
			header("Location: iniciar.php?error=datos");
		}
?>
</body>
</body>
</html>