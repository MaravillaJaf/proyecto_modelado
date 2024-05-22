<?php
header('Content-Type: application/json');

// Obtiene los datos de la solicitud
$input = json_decode(file_get_contents('php://input'), true);
$startDate = $input['startDate'];
$endDate = $input['endDate'];

// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "pizzeria";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Consulta a la base de datos
$sql = "SELECT * FROM sales WHERE sale_date BETWEEN ? AND ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $startDate, $endDate);
$stmt->execute();
$result = $stmt->get_result();

$sales = [];
while ($row = $result->fetch_assoc()) {
    $sales[] = $row;
}

// Cerrar conexión
$stmt->close();
$conn->close();

// Devolver los resultados como JSON
echo json_encode($sales);
?>
