<?php
include '../../conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_proveedor = $_POST['id_proveedor'];
    $fecha_compra = $_POST['fecha_compra'];
    $total_compra = $_POST['total_compra'];

    $sql = "INSERT INTO compras (id_proveedor, fecha_compra, total_compra) VALUES ('$id_proveedor', '$fecha_compra', '$total_compra')";
    
    if ($conexion->query($sql) === TRUE) {
        header("Location: crudcompras.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}
?>