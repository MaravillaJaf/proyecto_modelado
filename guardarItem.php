<?php
session_start();

if (!isset($_SESSION['usuarioActual'])) {
    header("Location: iniciar.php");
    exit();
}
?>
<html>
<head><title>Registrar Datos</title></head>
<body>

<hr>
<br>
<?PHP
	$valor=$_REQUEST["valor"];
    $id=$_REQUEST["id"];
    $nombre=$_REQUEST["nombre"];
    $precio=$_REQUEST["precio"];
    $img=$_FILES['archivo']['name'];


	echo "Valor:$valor<br>id:$id<br>Nombre:$nombre Precio:$precio Imagen:$img";

    if($valor=='1'){
        
        $link=mysqli_connect("localhost","root","");
        mysqli_select_db($link,"pizzeria");
        $result=mysqli_query($link,"insert into bebidas (id_bebidas,nombre,precio,img) values ('$id','$nombre','$precio','$img')");

        $dest="img/";
        $nom=$_FILES['archivo']['tmp_name'];
	    echo "$nom<br>";
	    copy($nom,$dest.$img);
        header("Location: ingresar.php?datos=ingresados");
    }
    else if($valor=='2'){
        
        $link=mysqli_connect("localhost","root","");
        mysqli_select_db($link,"pizzeria");
        $result=mysqli_query($link,"insert into comidas (id_comidas,nombre,precio,img) values ('$id','$nombre','$precio','$img')");

        $dest="img/";
        $nom=$_FILES['archivo']['tmp_name'];
	    echo "$nom<br>";
	    copy($nom,$dest.$img);
        header("Location: ingresar.php?datos=ingresados");
    }
	else{
		header("Location: ingresar.php?error=noIngresados");
	}
?>
</body>
</body>
</html>