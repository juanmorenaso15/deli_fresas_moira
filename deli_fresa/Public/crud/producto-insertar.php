<?php
include("conexion.php");
$con = conexion();

$nombre_producto = $_POST['nombre_producto'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$id_categoria = $_POST['id_categoria'];

$sql = "INSERT INTO productos (nombre_producto, descripcion, precio, stock, id_categoria) VALUES ('$nombre_producto', '$descripcion', '$precio', '$stock', '$id_categoria')";
$resultado = mysqli_query($con, $sql);

if($resultado) {
    Header("Location: crudproductos.php");
} else {
    echo "Error al registrar el producto.";
}
?>