<?php
include("conexion.php");
$con = conexion();

$id = $_GET['id'];

$sql = "DELETE FROM ventas WHERE id_venta = '$id'";
$resultado = mysqli_query($con, $sql);

if($resultado) {
    Header("Location: crudventas.php");
} else {
    echo "Error al eliminar la venta.";
}
?>