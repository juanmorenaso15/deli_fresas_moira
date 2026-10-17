<?php
include("conexion.php");
$con = conexion();

$id_venta = $_POST['id_venta'];
$id_producto = $_POST['id_producto'];
$cantidad = $_POST['cantidad'];
$subtotal = $_POST['subtotal'];

$sql = "INSERT INTO detalle_ventas (id_venta, id_producto, cantidad, subtotal) VALUES ('$id_venta', '$id_producto', '$cantidad', '$subtotal')";
$resultado = mysqli_query($con, $sql);

if($resultado) {
    Header("Location: cruddetalleventas.php");
} else {
    echo "Error al registrar el detalle de venta.";
}
?>