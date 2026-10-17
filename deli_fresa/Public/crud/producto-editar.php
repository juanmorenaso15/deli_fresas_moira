<?php
include("conexion.php");
$con = conexion();

$id_producto = $_POST['id_producto'];
$nombre_producto = $_POST['nombre_producto'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];

$sql = "UPDATE productos SET nombre_producto='$nombre_producto', descripcion='$descripcion', precio='$precio', stock='$stock' WHERE id_producto='$id_producto'";
$resultado = mysqli_query($con, $sql);

if($resultado) {
    Header("Location: crudproductos.php");
} else {
    echo "Error al actualizar el producto.";
}
?>