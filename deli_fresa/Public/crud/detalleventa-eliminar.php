<?php
include("conexion.php");
$con = conexion();

$id = $_GET['id'];

$sql = "DELETE FROM detalle_ventas WHERE id_detalle = '$id'";
$resultado = mysqli_query($con, $sql);

if($resultado) {
    Header("Location: cruddetalleventas.php");
} else {
    echo "Error al eliminar el detalle de venta.";
}
?>