<?php
header('Content-Type: application/json');
include '../db_connection.php';

// Ejemplo de obtención de artículos desde la base de datos
$sql = "SELECT * FROM articulos ORDER BY fecha_publicacion DESC";
$result = $conn->query($sql);

$articles = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $articles[] = $row;
    }
}

echo json_encode($articles);

$conn->close();
?>
