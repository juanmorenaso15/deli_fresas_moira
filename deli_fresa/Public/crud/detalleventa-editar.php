<?php
include("conexion.php");
$con = conexion();

$id_detalle = $_POST['id_detalle'];
$id_venta = $_POST['id_venta'];
$id_producto = $_POST['id_producto'];
$cantidad = $_POST['cantidad'];
$subtotal = $_POST['subtotal'];

$sql = "UPDATE detalle_ventas SET id_venta='$id_venta', id_producto='$id_producto', cantidad='$cantidad', subtotal='$subtotal' WHERE id_detalle='$id_detalle'";
$resultado = mysqli_query($con, $sql);

if($resultado) {
    Header("Location: cruddetalleventas.php");
} else {
    echo "Error al actualizar el detalle de venta.";
}
?>