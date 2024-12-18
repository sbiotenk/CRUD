<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "mi_base_datos";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
