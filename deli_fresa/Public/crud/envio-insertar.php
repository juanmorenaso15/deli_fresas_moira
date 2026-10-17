<?php
include '../../conexion.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_venta = $_POST['id_venta'];
    $direccion = $_POST['direccion_envio'];
    $ciudad = $_POST['ciudad'];
    $fecha = $_POST['fecha_envio'];
    $estado = $_POST['estado_envio'];

    $sql = "INSERT INTO envios (id_venta, direccion_envio, ciudad, fecha_envio, estado_envio) VALUES ('$id_venta', '$direccion', '$ciudad', '$fecha', '$estado')";
    if ($conexion->query($sql) === TRUE) {
        header("Location: crudenvios.php");
    } else {
        echo "Error: " . $conexion->error;
    }
}
?>