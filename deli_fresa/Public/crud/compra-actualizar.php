<?php
include '../../conexion.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id_compra'];
    $id_proveedor = $_POST['id_proveedor'];
    $fecha = $_POST['fecha_compra'];
    $total = $_POST['total_compra'];

    $sql = "UPDATE compras SET id_proveedor='$id_proveedor', fecha_compra='$fecha', total_compra='$total' WHERE id_compra=$id";
    if ($conexion->query($sql) === TRUE) {
        header("Location: crudcompras.php");
    } else {
        echo "Error al actualizar: " . $conexion->error;
    }
}
?>