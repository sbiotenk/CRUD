<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre_equipo = $_POST['nombre_equipo'];
    $ip = $_POST['ip'];
    $mac = $_POST['mac'];
    $sector = $_POST['sector'];
    $ubicacion = $_POST['ubicacion'];
    $usuario = $_POST['usuario'];

    $sql = "INSERT INTO relevamientos (id, nombre_equipo, ip, mac, sector, ubicacion, usuario) 
            VALUES ('$id', '$nombre_equipo', '$ip', '$mac', '$sector', '$ubicacion', '$usuario')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["success" => true, "message" => "Registro agregado correctamente."]);
    } else {
        echo json_encode(["success" => false, "message" => "Error: " . $conn->error]);
    }
    $conn->close();
}
?>
