<?php
include("conexion.php");
$con = conexion();

$id = $_GET['id'];

$sql = "DELETE FROM productos WHERE id_producto = '$id'";
$resultado = mysqli_query($con, $sql);

if($resultado) {
    Header("Location: crudproductos.php");
} else {
    echo "Error al eliminar el producto.";
}
?>