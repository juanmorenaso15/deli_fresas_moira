<?php
include '../../conexion.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id_envio'];
    $direccion = $_POST['direccion_envio'];
    $ciudad = $_POST['ciudad'];
    $fecha = $_POST['fecha_envio'];
    $estado = $_POST['estado_envio'];

    $sql = "UPDATE envios SET direccion_envio='$direccion', ciudad='$ciudad', fecha_envio='$fecha', estado_envio='$estado' WHERE id_envio=$id";
    if ($conexion->query($sql) === TRUE) {
        header("Location: crudenvios.php");
    } else {
        echo "Error al actualizar: " . $conexion->error;
    }
}
?>